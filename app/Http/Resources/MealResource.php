<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->translation->title,
            'description' => $this->translation->description,
            'status' => !empty($request->diff_time) ? $this->checkDate($request->diff_time) : 'created',
            'category' => new CategoryResource($this->whenLoaded('category')),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'ingredients' => IngredientResource::collection($this->whenLoaded('ingredients'))
        ];
    }


    //order unix timestamp array by descending and check if the first key is after diff_time (if true change status to key name)
    private function checkDate($diff_time){
        $created = strtotime($this->created_at);
        $modified = strtotime($this->updated_at);
        $deleted = !empty($this->deleted_at) ? strtotime($this->deleted_at) : null;

        $timestamps = compact('created', 'modified', 'deleted');

        uasort($timestamps, [$this, 'cmp']); //order array values (descending)

        $first_key = array_key_first($timestamps);
        $status = 'created';

        if($diff_time < $timestamps[$first_key]){ //check if highest value timestamp is greater than diff_time
            $status = $first_key;
        }

        return $status;
    }

    //order array by value (without losing key name)
    private static function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

}
