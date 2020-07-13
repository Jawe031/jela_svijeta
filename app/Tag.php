<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\TagTranslation')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }
}
