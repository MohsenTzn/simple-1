<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Support\Facades\App;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=[
        'title', 'demo', 'category'
    ];
    protected $guarded=[];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
