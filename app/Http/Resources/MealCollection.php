<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MealCollection extends ResourceCollection
{

    private $meta, $links;

    public function __construct($resource)
    {
        //get new meta data
        $this->meta = [
            'currentPage' => $resource->currentPage(),
            'totalItems' => $resource->total(),
            'itemsPerPage' => intval($resource->perPage()),
            'totalPages' => $resource->lastPage()
        ];
        
        //generate pagination links from query data
        $this->links = [
            'prev' => $resource->appends(request()->query())->previousPageUrl(),
            'next' => $resource->appends(request()->query())->nextPageUrl(),
            'self' => request()->fullUrl()
        ];
        
        $resource = $resource->getCollection();

        parent::__construct($resource);
    }
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'meta' => $this->meta,
            'data' =>  MealResource::collection($this->collection),
            'links' => $this->links
        ];
    }
    
}
