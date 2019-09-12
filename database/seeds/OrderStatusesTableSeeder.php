<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $statuses = Config::get('constants.db.order_statuses');
        foreach ($statuses as $status) {
            \App\OrderStatus::create(['name' => $status]);
        }
    }
}
