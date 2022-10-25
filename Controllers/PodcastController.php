<?php

namespace App\Http\Controllers;

use App\Http\Requests\PodcastRequest;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PodcastController extends Controller
{
    public function store(PodcastRequest $request)
    {
        $podcast = Podcast::create($request->validated());
        $podcast->tracks()->createMany(Arr::get($request->validated(), 'tracks'));
        $podcast->tracks()->createMany(Arr::get($request->validated(),'tracks'));
        return new PodcastResource($podcast);
    }

    public function index()
    {
        $podcast = Podcast::with('tracks')->get();
        return PodcastResource::collection($podcast);
    }

    public function show(Podcast $podcast)
    {
        return PodcastResource::make($podcast);
    }

    public function delete(Podcast $podcast)
    {
        $podcast->delete();
        return response()->json([
            'status' => '200 OK'
        ]);
    }

    public function update(PodcastRequest $request, Podcast $podcast)
    {
        $podcast->update($request->validated());
        return response()->json($podcast);
    }
}
