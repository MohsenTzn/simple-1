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
    public function index($modelType, $modeId, Request $request)
    {
        $model = Arr::get(config("morph", $modelType));
        if (!isNull($model)) {
            $comment = new Comment([
                "comment" => Arr::get($request, 'comment')
            ]);
            $model->comments()->save($comment);
            return Response()->json(["date" => $comment]);
        }
    }

}

