<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\CategoryTranslation')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }
}
