<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NewsController extends Controller
{
    public function store(NewsRequest $request, Article $article)
    {
        $news = News::create($request->validated());
        $news->articles()->createMany(Arr::get($request->validated(), 'articles'));
        $article->tags()->create();
        return new NewsResource($news);

    }

    public function index()
    {
        $news = News::with('articles')->get();
        return NewsResource::collection($news);

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

    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());
        return response()->json($news);
    }
}
