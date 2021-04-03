<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function getImageAttribute($value){
        return asset($value);
    }
}
