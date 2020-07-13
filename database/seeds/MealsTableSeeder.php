<?php

use Illuminate\Database\Seeder;
use App\Meal;
use App\MealTranslation;
use Illuminate\Support\Str;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Meal::class, 20)->create()->each(function($meal) {
            $title = 'Naslov jela '.$meal->id.' na HRV jeziku';
            $description = 'Opis jela '.$meal->id.' na HRV jeziku';
            $translation = factory(App\MealTranslation::class)->create([
                'meal_id' => $meal->id,
                'title' => $title,
                'description' => $description,
                'slug' => Str::slug($title, '-'),
                'locale' => 'hr',
            ]);
            $meal->translation()->save($translation);

            $title = 'Meal title '.$meal->id.' in ENG language';
            $description = 'Meal description '.$meal->id.' in ENG language';
            $translation = factory(App\MealTranslation::class)->create([
                'meal_id' => $meal->id,
                'title' => $title,
                'description' => $description,
                'slug' => Str::slug($title, '-'),
                'locale' => 'en',
            ]);
            $meal->translation()->save($translation);

            factory(App\MealIngredient::class, rand(1,3))->create([
                'meal_id' => $meal->id
            ]);

            factory(App\MealTag::class, rand(1,3))->create([
                'meal_id' => $meal->id
            ]);
        });
    }
}
