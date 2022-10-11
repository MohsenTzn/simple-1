<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use League\Flysystem\Config;
use function PHPUnit\Framework\isNull;

class CommentController extends Controller
{
    public function store($modelType, $modelId, Request $request)
    {
        $model = Arr::get(config("morph"), $modelType);
        //dd($model);
        $model = app($model)->findOrFail($modelId);
        if (!is_null($model)) {
            $comment = new Comment([
                "content" => Arr::get($request, "content"),
                "news_id" => Arr::get($request, "news_id"),
            ]);
            $model->comments()->save($comment);
            return ["data" => $comment];
        }
        return null;
    }
}

