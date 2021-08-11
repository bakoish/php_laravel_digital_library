<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borroweds')->insert([
            'book_id' => 1,
            'user_id' => 1,
            'borrowed_at' => \Carbon\Carbon::createFromDate(2019, 12, 10)->toDateTimeString(),
            'borrowed_to' => \Carbon\Carbon::createFromDate(2020, 1, 10)->toDateTimeString(),
            'active' => false
        ]);
        DB::table('borroweds')->insert([
            'book_id' => 2,
            'user_id' => 1,
            'borrowed_at' => \Carbon\Carbon::createFromDate( 2021, 1, 20)->toDateTimeString(),
            'borrowed_to' => \Carbon\Carbon::createFromDate( 2021, 1, 27)->toDateTimeString(),
            'active' => true
        ]);
        DB::table('borroweds')->insert([
            'book_id' => 3,
            'user_id' => 1,
            'borrowed_at' => \Carbon\Carbon::createFromDate(2021,01,20)->toDateTimeString(),
            'borrowed_to' => \Carbon\Carbon::createFromDate(2021, 03, 20)->toDateTimeString(),
            'active' => true
        ]);
    }
}
