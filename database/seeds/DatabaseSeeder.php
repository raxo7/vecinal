<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(MaritalStatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
        $this->call(NeighboursTableSeeder::class);
        $this->call(ActivityTypesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
    }
}
