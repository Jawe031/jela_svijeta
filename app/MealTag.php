<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealTag extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\TagTranslation', 'tag_id', 'tag_id')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }
}
