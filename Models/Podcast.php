<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $table='podcasts';
    protected $fillable=['name','topic'];



    public function tracks(){
       return $this->hasMany(Track::class);
    }
}

