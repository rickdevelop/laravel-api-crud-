<?php

use Illuminate\Database\Seeder;
use App\Imports\MoviesImport;
use Maatwebsite\Excel\Facades\Excel;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new MoviesImport, 'movies.xlsx');
    }
}
