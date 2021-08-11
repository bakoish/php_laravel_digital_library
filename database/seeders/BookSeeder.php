<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'isbn' => '123123',
            'title' => 'Dziady 2',
            'author'=>'Adam Mickiewicz',
            'available_quantity'=> 2,
            'description'=>'super ksiazka'
        ]);
        DB::table('books')->insert([
            'isbn' => '125125',
            'title' => 'Dziady 3',
            'author'=>'Juliusz Slowacki',
            'available_quantity'=> 100,
            'description'=>'moze byc'
        ]);
        DB::table('books')->insert([
            'isbn' => '124124',
            'title' => 'Dziady 1',
            'author'=>'Adam Mickiewicz',
            'available_quantity'=> 3,
            'description'=>'niefajna ksiazka'
        ]);
        DB::table('books')->insert([
            'isbn' => '999999',
            'title' => 'Zbrodnia i kara',
            'author'=>'Fiodor Dostojewski',
            'available_quantity'=> 1,
            'description'=>'Super ksiazka tez bym kogos siekierka tak hyc'
        ]);
        DB::table('books')->insert([
            'isbn' => '997klopoty',
            'title' => '365 dni',
            'author'=>'Blanka Lipińska',
            'available_quantity'=> 10,
            'description'=>'Arcydzielo polskiej literatury'
        ]);
    }
}
