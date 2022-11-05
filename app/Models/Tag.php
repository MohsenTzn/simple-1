<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = [];

    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }

    public function tracks()
    {
        return $this->morphedByMany(Track::class, 'taggable');
    }
}
