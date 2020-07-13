<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\IngredientTranslation')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }
}
