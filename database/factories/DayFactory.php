<?php

/* @var $factory Factory */

use App\Model;
use App\Models\Hotpark\Day;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Day::class, function (Faker $faker) {
    return [
        'day' => $faker->date('Y-m-d'),
        'type' => rand(0, 2)
    ];
});
