<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Article extends Model
{
    use HasFactory;

    public function getTable()
    {
        return "articles";
    }

    protected $fillable = [
        'name', 'subject', 'author', 'news_id'
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
