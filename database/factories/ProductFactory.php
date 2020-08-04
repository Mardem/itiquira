<?php

/* @var $factory Factory */

use App\Model;
use App\Models\Hotpark\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->monthName,
        'price' => $faker->randomFloat(1),
        'available' => rand(0,1),

    ];
});
