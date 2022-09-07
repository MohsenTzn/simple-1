<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use http\Env\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        $data = Article::create($request->validated());
        return response()->json([
            $data
        ]);
    }

    public function index(Request $request)
    {
        return ArticleResource::collection(Article::all());

    }

    public function show(Article $article)
    {
        /*$article = Article::find($article);
        return response()->json($article);*/

        return ArticleResource::make($article);

    }

    public function delete(Article $article)
    {

        $article->delete();
        return response()->json([
            'Article with this id ,deleted successfully'
        ]);
    }
}
