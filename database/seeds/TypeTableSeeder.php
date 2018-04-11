<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Type::insert([
        				['name'	=> 'None',],
        				['name'	=> 'Cold',],
        				['name'	=> 'Hot',],
        			]);
    }
}
