<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(NewsRequest $request)
    {
        $data=News::create($request->validated());
        return response()->json($data);
    }

    public function indexNews(News $news)
    {
        return News::with('Article')->where('id',$news->id)->get();
    }

    public function index(News $news)
    {
       // return News::with('Article')->where('id',$news->id)->get();
        return NewsResource::collection(News::all());

    }
    public function show(News $news)
    {
        return NewsResource::make($news);
    }
    public function delete(News $news)
    {
        $news->delete();
        return response()->json([
            "deleted succesfully"
        ]);
    }
}
