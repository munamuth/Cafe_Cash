<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::insert([
        				['name'	=> 'Drink',],
        				['name'	=> 'Food',],
        			]);
    }
}
