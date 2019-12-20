<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@juntapp.cl',
                'password' => Hash::make('12345678'),
                'admin' => 1
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')
                ->insert($user);
        }
    }
}
