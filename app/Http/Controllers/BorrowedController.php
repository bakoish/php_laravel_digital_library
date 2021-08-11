<?php

namespace App\Http\Controllers;

use App\Models\Borrowed;
use App\Models\User;
use App\Models\Books;
use Illuminate\Http\Request;

class BorrowedController extends Controller
{
    public function index(){

        $borrowed = Borrowed::all();
        return view('borrowed.index', ['borrowed' => $borrowed]);
    }

    public function store(Request $request){

        $borrowed = new Borrowed;
        $borrowed->user_id = $request->get('user');
        $borrowed->book_id = $request->get('book');
        $borrowed->borrowed_at = \Carbon\Carbon::now()->toDateTimeString();
        $borrowed->borrowed_to = \Carbon\Carbon::now()->addMonth()->toDateTimeString();
        $borrowed->active = false;

        $borrowed->save();

        return redirect()->back();
    }

    public function switchstatus(Borrowed $borrowed){
        $newStatus = !$borrowed->active;
        $borrowed->update(['active' => $newStatus]);
        $book = $borrowed->book;

        if($newStatus){
            $book->update(['available_quantity' => $book->available_quantity - 1]);
        } else {
            $book->update(['available_quantity' => $book->available_quantity + 1]);
        }


        return redirect()->back();
    }
}
