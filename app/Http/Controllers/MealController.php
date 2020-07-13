<?php

namespace App\Http\Controllers;
use App\Http\Requests\IndexMeal;
use App\Http\Resources\MealCollection;
use App\Repositories\MealRepository;

class MealController extends Controller
{

    protected $mealRepository;

    public function __construct(MealRepository $mealRepository){
        $this->mealRepository = $mealRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(IndexMeal $request)
    {
        $meals = $this->mealRepository->search($request);
        return new MealCollection($meals);
    }
}
