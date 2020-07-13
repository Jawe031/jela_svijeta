<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MealTag;
use Faker\Generator as Faker;

$factory->define(MealTag::class, function (Faker $faker) {
    return [
        'tag_id' => $faker->unique(true)->numberBetween(1,60)
    ];
});
