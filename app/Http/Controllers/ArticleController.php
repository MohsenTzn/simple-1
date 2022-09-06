<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
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
        Article::query()->create();
        return response()->json(Article::query());
    }

    public function index(Request $request)
    {
        $article = Article::all();
        if ($article) {
            return response()->json([
                $article
            ]);
        } else {
            return response()->json([
                'Error' => 'data not found'
            ]);

        }

    }

    public function show($id)
    {
        $article = Article::find($id);
        if ($article) {
            return response()->json($article);
        } else {
            return response()->json([
                "message" => "No exist Article with  this Id"
            ]);
        }
    }

    public function delete($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete($id);
            return response()->json([
                'Article with this id ,deleted successfully'
            ]);
        } else {
            return response()->json([
                "message" => "No exist Article with  this Id"
            ]);
        }
    }
}
