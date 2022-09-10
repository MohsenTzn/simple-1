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
        $data=Article::create($request->validated());
        return response()->json([
           $data
        ]);
    }
    public function index()
    {
        //$article = Article::with('News')->get();
        return ArticleResource::collection(Article::all());
    }
    public function show(Article $article)
    {
        return ArticleResource::make($article);
    }
    public function delete(Article $article)
    {
       $article->delete();
       return response()->json([
           'deleted successfully'
       ]);
    }
}
