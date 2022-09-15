<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(NewsRequest $request,News $news , Article $article)
    {
       $news=News::create($request->validated());
        return new NewsResource($news);


        $news->articles()->saveMany([
            new article(['message' => 'A new article.']),

        ]);
        return new NewsResource($news);

    }


    public function index(News $news)
    {
        return News::with('articles')->get();
        //return NewsResource::collection(News::all());

    }
    public function show(News $news)
    {
        return NewsResource::make($news);
    }
    public function delete(News $news)
    {
        $news->delete();
        return response()->json([
            'status' => '200 OK'
        ]);
    }
}
