<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 60)->create()->each(function($category) {
            $title = 'Naslov kategorije ' .$category->id. ' na HRV jeziku';
            $translation = factory(App\CategoryTranslation::class)->create([
                'category_id' => $category->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'hr',
            ]);
            $category->translation()->save($translation);

            $title = 'Category title ' .$category->id. ' in ENG language';
            $translation = factory(App\CategoryTranslation::class)->create([
                'category_id' => $category->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'en',
            ]);
            $category->translation()->save($translation);
        });
    }
}
