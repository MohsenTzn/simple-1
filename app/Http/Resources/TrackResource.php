<?php

namespace App\Http\Resources;

use App\Models\Podcast;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Podcadt_id' => $this->podcast_id,
            'name' => $this->name,
            'composer' => $this->composer,
            'tags' =>  TagResource::collection($this->whenLoaded('tags')),
            'podcast' => new PodcastResource($this->whenLoaded('podcast')),

        ];
    }
}
