<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class, 60)->create()->each(function($tag) {
            $title = 'Naslov tag-a ' .$tag->id. ' na HRV jeziku';
            $translation = factory(App\TagTranslation::class)->create([
                'tag_id' => $tag->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'hr',
            ]);
            $tag->translation()->save($translation);

            $title = 'Tag title ' .$tag->id. ' in ENG language';
            $translation = factory(App\TagTranslation::class)->create([
                'tag_id' => $tag->id,
                'title' => $title,
                'slug' => Str::slug($title, '-'),
                'locale' => 'en',
            ]);
            $tag->translation()->save($translation);
        });
    }
}
