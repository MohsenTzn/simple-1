<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use League\Flysystem\Config;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(config('comment.article'));
    }

}

