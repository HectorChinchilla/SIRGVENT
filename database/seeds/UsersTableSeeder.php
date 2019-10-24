<?php

use Illuminate\Database\Seeder;

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
                'name' => 'Jose',
                'email' => 'joseorte@gmail.com',
                'password' => bcrypt('jose1234'),
            ],

            [
                'name' => 'Filomeno',
                'email' => 'filomeno123@gmail.com',
                'password' => bcrypt('filomeno1234'),
            ],

        ];

        DB::table('users')->insert($users);
    }
}
