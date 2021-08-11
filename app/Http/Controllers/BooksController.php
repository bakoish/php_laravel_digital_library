<?php
namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('books.index',['books'=>$books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store()
    {
        $data = Books::create($this->validateBook());
        return redirect('/books/' . $data->id);
    }

    public function update(Books $book)
    {
        $book->update($this->validateBook());
        return redirect('/books/'.$book->id);
    }

    public function validateBook()
    {
        return request()->validate([
            'isbn' => ['required', 'digits:13'],
            'title' => ['required'],
            'description' => ['required'],
            'author' => ['required'],
            'available_quantity' => ['numeric']
        ]);
    }

    public function show(Books $book)
    {
        return view('books.show', ['book' => $book]);
    }
    public function showforuser(Books $book)
    {
        return view('books.showforuser', ['book' => $book]);
    }
    public function edit(Books $book)
    {
        return view ('books.edit',['book'=>$book]);
    }


    public function searchbook(Request $request){
        $search_input = $request->input('searchinput') ?? " ";

        $books = Books::all();

        $found_books = [];

        foreach( $books as $b ){
            $title_search = strpos($b->title, $search_input);
            $isbn_search  = strpos($b->isbn, $search_input);
            $author_search = strpos($b->author, $search_input);

            $is_found = !($title_search === false) || !($isbn_search === false) || !($author_search === false);
            if($is_found){
                array_push($found_books, $b);
            }
        }

        return redirect('/search')->with('books', $found_books);
    }

    public function search()
    {
        $books = Books::all();
        return view('books.search',['books'=>$books]);
    }


    public function destroy(Books $book)
    {
        try {
            $book->delete();
        } catch (\Exception $e) {
        }
        return redirect('/books');
    }

}
