<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MealIngredient;
use Faker\Generator as Faker;

$factory->define(MealIngredient::class, function (Faker $faker) {
    return [
        'ingredient_id' => $faker->unique(true)->numberBetween(1,60)
    ];
});
