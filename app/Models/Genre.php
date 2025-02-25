<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function movies(){
      return $this->hasMany('App\Models\Movie', 'genre_id');
    }
}
