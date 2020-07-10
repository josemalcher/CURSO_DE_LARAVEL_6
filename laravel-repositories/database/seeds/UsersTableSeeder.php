<?php

use App\User;
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
        User::create([
            'name'      => 'José Malcher jr',
            'email'     => 'contato@josemalcher.net',
            'password'  => bcrypt('123456'),
        ]);
    }
}
