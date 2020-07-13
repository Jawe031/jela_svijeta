<?php

namespace App\Repositories;
use App\Meal;

class MealRepository{
    public function search($request){
        $data = $request->all();
        $data['per_page'] = !empty($data['per_page']) ? $data['per_page'] : null;
       
        return Meal::getAllSortedByCategory($data)
        ->getAllSortedByTags($data)
        ->getAllSortedByDiffTime($data)
        ->getAllRelations($data)
        ->paginate($data['per_page']);
    }
}