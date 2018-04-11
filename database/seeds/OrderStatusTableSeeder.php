<?php

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\OrderStatus::insert([
        				['name'	=> 'Pending',],
        				['name'	=> 'Deliver',],
        			]);
    }
}
