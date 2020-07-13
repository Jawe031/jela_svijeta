<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Meal;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Meal::class, function (Faker $faker) {
    return [
        'category_id' => rand(0,4) ? rand(1,30) : null,
        'deleted_at' => rand(0,5) ? null : Carbon::now()->addMinutes(5),
    ];
});
