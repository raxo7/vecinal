<?php

use Illuminate\Database\Seeder;

class ActivityTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Actividad',
            'Reunión',
            'Acta',
            'Proyecto',
            'Curso'
        ];

        foreach ($types as $type) {
            DB::table('activity_types')
                ->insert(['name' => $type]);
        }
    }
}
