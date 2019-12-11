<?php

use Illuminate\Database\Seeder;

class MaritalStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'Soltero',
            'Casado',
            'Divorciado',
            'Viudo',
            'Unión civil'
        ];

        foreach ($states as $state) {
            DB::table('marital_states')
                ->insert(['name' => $state]);
        }
    }
}
