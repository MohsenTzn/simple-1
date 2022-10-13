<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Http\Resources\TrackResource;
use App\Models\Comment;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function store(TrackRequest $request)
    {
        $track = Track::create($request->validated());
        $track->tags()->create([
        ]);
        return response()->json($track);
    }

    public function index()
    {
        $track = Track::with('podcast')->get();
        return TrackResource::collection($track);
    }

    public function show(Track $track)
    {
        return TrackResource::make($track);
    }

    public function delete(Track $track)
    {
        $track->delete();
        return response()->json([
            'status' => '200 OK'
        ]);
    }

    public function update(TrackRequest $request, Track $track)
    {

        $track->update($request->validated());
        return response()->json($track);
    }

}
