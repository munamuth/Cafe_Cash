<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
        				'name'	=> 'Admin',
        				'email'	=> 'admin',
        				'password'	=> bcrypt('admin'),
        			]);
    }
}
