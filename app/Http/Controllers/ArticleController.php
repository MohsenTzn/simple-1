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
        Article::query()->create([
            'title' => $request['title'],
            'author' => $request['author'],
            'subject' => $request['subject'],
        ]);
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
}
