<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        //dd($request->all());
        $article = Article::create($request->validated());
        /*$tag = Tag::create($request->validated());*/
       /* $article->tags()->saveMany([
           new Tag(['name'=>$request->name]),
           new Tag(['taggable_type'=>$request->taggable_type]),
        ]);*/
        $tag=$article->tags()->create([
            'name'=>$request->name,

        ]);
        //$article->tags()->attach($tag);
        return response()->json([
            $tag
        ]);
    }
    public function index()
        /* {
        $article = Article::with(['news' => function ($query) {
        return $query->select(['title']);
        }, 'tags'])->get();*/
    {
        $article = Article::with('news', 'tags')->get();
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
