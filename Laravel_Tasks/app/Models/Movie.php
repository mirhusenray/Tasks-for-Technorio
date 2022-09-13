<?php

namespace App\Models;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use CanBeLiked;
    
    protected $fillable=[
        'title',
        'description',
        'release_date',
        'poster'
    ];

    public function favorite(){
        return $this->hasMany(Favorite::class);
     }
}
