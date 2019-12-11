<?php

use Illuminate\Database\Seeder;

use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre;
        $genre->type = 'Femenino';
        $genre->save();

        $genre = new Genre;
        $genre->type = 'Masculino';
        $genre->save();
    }
}
