<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        $article=Article::create($request->validated());
        return response()->json([
           $article
        ]);
    }
    public function index(Article $article)
    {
        $article= Article::with('news')->get();
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
}
