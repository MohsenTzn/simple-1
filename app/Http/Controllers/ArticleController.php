<?php

namespace App\Http\Controllers;

use App\Models\Article;
use http\Env\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
       /* $article=new Article();
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->subject = $request->input('subject');
        $article->save();*/
        Article::query()->create([
            'title'=>$request['title'],
            'author'=>$request['author'],
            'subject'=>$request['subject'],
        ]);
        return response()->json(Article::query());
    }

    public function index(Request $request)
    {
        $article=Article::all();
        if ($article)
        {
            return response()->json([
                'student'=>$article
            ]);
        }
        else
        {
            return response()->json([
                'Error'=>'data not found'
            ]);

        }
    }
}
