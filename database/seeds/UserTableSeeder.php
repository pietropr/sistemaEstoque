<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

            'name' => 'Administrador',
            'email' => 'pintonpietro@gmail.com',
            'password' => bcrypt('Pa$$w0rd'),

        ]);

    }
}
