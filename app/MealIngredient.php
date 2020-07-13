<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealIngredient extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\IngredientTranslation', 'ingredient_id', 'ingredient_id')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }
}
