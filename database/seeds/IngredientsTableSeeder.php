<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ingredient::class, 60)->create()->each(function($ingredient) {
            $title = 'Naslov sastojka ' .$ingredient->id. ' na HRV jeziku';
            $translation = factory(App\IngredientTranslation::class)->create([
                'ingredient_id' => $ingredient->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'hr',
            ]);
            $ingredient->translation()->save($translation);

            $title = 'Ingredient title ' .$ingredient->id. ' in ENG language';
            $translation = factory(App\IngredientTranslation::class)->create([
                'ingredient_id' => $ingredient->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'en',
            ]);
            $ingredient->translation()->save($translation);
        });
    }
}
