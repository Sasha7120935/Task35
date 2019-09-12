<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
Use Faker\Provider\en_NG\Address as FakerAddress;

$factory->define(Order::class, function (Faker $faker) {
   return array(
//        'user_id'=> function () {
//            return factory(App\User::class)->create()->id;
//        },
        'country' => $faker->country(),
        'city' => $faker->city(),
        'address' => FakerAddress::region(),
        'total_price' => $faker->randomFloat(2,10,500),
    );
});
