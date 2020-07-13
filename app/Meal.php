<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use SoftDeletes;

    public function translation()
    {
        return $this->hasOne('App\MealTranslation')
        ->where('locale', app()->getLocale())
        ->withTrashed();
    }

    public function category()
    {
        return $this->belongsTo('App\Category')
        ->withTrashed();
    }

    public function tags()
    {
        return $this->hasMany('App\MealTag')
        ->withTrashed();
    }

    public function ingredients()
    {
        return $this->hasMany('App\MealIngredient')
        ->withTrashed();
    }

    //if a category value is present check if it's numeric, else if it's null, else if it's not null
    public function scopeGetAllSortedByCategory($query, $data){
        $query->when(!empty($data['category']), function($query) use ($data) {
            $query->where(function ($query) use ($data) {
                if(is_numeric($data['category'])){
                    $query->where('category_id', $data['category']);
                }elseif(strtolower($data['category']) == 'null'){
                    $query->whereNull('category_id');
                }elseif(strtolower($data['category']) == '!null'){
                    $query->whereNotNull('category_id');
                }
            });
        });
    }

    //if a tags value is present make an array from comma separated tags and check if the number of tags are equal
    public function scopeGetAllSortedByTags($query, $data){
        $query->when(!empty($data['tags']), function($query) use ($data) {
            $query->where(function ($query) use ($data) {
                $query->whereHas('tags', function ($query) use ($data){
                    $tags = $data['tags'];
                    $query->whereIn('tag_id', $tags);
                    $query->havingRaw('COUNT(tag_id) = ?', [count($tags)]);
                });
            });
        });
    }


    //if a diff_time value is present get deleted rows
    public function scopeGetAllSortedByDiffTime($query, $data){
        $query->when(!empty($data['diff_time']), function($query) use ($data) {
            $query->withTrashed();
        });
    }

    //if a with value is present get all relations in it
    public function scopeGetAllRelations($query, $data){
        $query->with(['translation']);
        $query->when(!empty($data['with']), function($query) use ($data) {
            $relations = preg_filter('/$/', '.translation', $data['with']); //add sufix to each array value .translation (eg tags.translation)
            $query->with($relations);
        });
    }

}
