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
            'name' => $this->name,
            'composer' => $this->composer,
            'podcast' => new PodcastResource($this->whenLoaded('podcast')),

        ];
    }
}
