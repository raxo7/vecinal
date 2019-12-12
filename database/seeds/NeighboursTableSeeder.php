<?php

use Illuminate\Database\Seeder;
use App\Neighbour;
use App\Genre;
use App\Nationality;
use App\MaritalState;
use App\City;
use App\Village;

class NeighboursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = Genre::all();
        $nationalities = Nationality::all();
        $marital_states = MaritalState::all();
        $cities = City::all();
        $villages = Village::all();

        factory(Neighbour::class, 15)
            ->create([
                'genre_id' => $genres->random()->id,
                'nationality_id' => $nationalities->random()->id,
                'marital_state_id' => $marital_states->random()->id,
                'city_id' => $cities->random()->id,
                'village_id' => $villages->random()->id,
            ]);
    }
}
