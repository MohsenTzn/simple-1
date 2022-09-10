<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=[
        'title', 'demo', 'category'
    ];
    public function Article()
    {
        return $this->hasMany(Article::class);
    }
}
