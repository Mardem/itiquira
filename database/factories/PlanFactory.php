<?php

/* @var $factory Factory */

use App\Model;
use App\Models\Hotpark\Plan;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
