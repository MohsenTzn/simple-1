<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table='tracks';
    protected $fillable=['name','composer','podcast_id'];



    public function podcasts()
    {
        return $this->belongsTo(Podcast::class);
    }
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
