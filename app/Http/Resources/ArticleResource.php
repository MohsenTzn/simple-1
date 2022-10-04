<?php

namespace App\Http\Resources;


use App\Models\News;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'news_id' => $this->news_id,
            'name' => $this->name,
            'subject' => $this->subject,
            'author' => $this->author,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'tags' =>  TagResource::collection($this->whenLoaded('tags')),
            'news' => new NewsResource($this->whenLoaded('news')),
        ];
    }
}
