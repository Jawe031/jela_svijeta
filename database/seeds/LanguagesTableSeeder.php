<?php

use Illuminate\Database\Seeder;
class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Language::class)->create([
            'title' => 'Hrvatski (Croatian)',
            'locale' => 'hr'
        ]);

        factory(App\Language::class)->create([
            'title' => 'English',
            'locale' => 'en'
        ]);
    }
}
