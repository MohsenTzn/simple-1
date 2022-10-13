<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\TrackRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\Comment;
use App\Models\News;
use App\Models\Track;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        //dd($request->all());
        $article = Article::create($request->validated());
        $article->tags()->create([
        ]);
        return response()->json([
            $article
        ]);
    }

    public function index()
    {
        $article = Article::with('news')->get();
        return ArticleResource::collection($article);
    }

    public function show(Article $article)
    {
        return ArticleResource::make($article);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json([
            'status' => '200 OK'
        ]);
    }

    public function update(ArticleRequest $request, Article $article)
    {

        $article->update($request->validated());
        return response()->json($article);
    }
}


