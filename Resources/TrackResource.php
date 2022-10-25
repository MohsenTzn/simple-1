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
        //dd($this);
        return [
            'id' => $this->id,

            'podcast_id' => $this->podcast_id,

            'Podcadt_id' => $this->podcast_id,

            'name' => $this->name,
            'composer' => $this->composer,
            'podcast' => new PodcastResource($this->whenLoaded('podcast')),
            'tags' =>  TagResource::collection($this->whenLoaded('tags')),

        ];
    }
}
