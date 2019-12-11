<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Arica',
            'Valparaíso',
            'Santiago',
            'Rancagua',
            'Concepción',
            'Osorno',
            'Punta Arenas'
        ];

        foreach ($cities as $city) {
            DB::table('cities')
                ->insert(['name' => $city]);
        }
    }
}
