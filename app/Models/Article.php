<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table='articles';
    protected $fillable=[
        'news_id','title', 'subject', 'author'
    ];

    public function News()
    {
        return $this->belongsTo(News::class);
    }

}
