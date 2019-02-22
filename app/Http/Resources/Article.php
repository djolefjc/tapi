<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body
        ];
    }
        // sa funkcijom with() mozemo da prenesmo jos neke vrednosti zajedno sa vec prenetim vrednostima
    
    public function with($request) 
    {
        return [

            'version'=>'1.0.0',
            'author_url'=> url('https://www.github.com/djolefjc'), 

        ];
    }
}
