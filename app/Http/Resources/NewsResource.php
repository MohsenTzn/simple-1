<?php

namespace App\Http\Resources;

use App\Models\Article;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //dd($this);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'demo' => $this->demo,
            'category' => $this->category,
            //'articles' => ArticleResource::collection($this->whenLoaded('articles')),
            //'tags' =>  TagResource::collection($this->whenLoaded('tags')),
        ];
    }
}
