<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       //dd($this);
        return
            [
                'id' => $this->id,
                'taggable_id' => $this->taggable_id,
               'taggable_type' => $this->taggable_type,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'articles'=> ArticleResource::collection($this->whenLoaded('articles')),
            ];
    }
}
