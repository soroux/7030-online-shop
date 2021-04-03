<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_design extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function getImageAttribute($value){

        return asset($value);
    }

    public function getPopularCategoriesAttribute($value){

        return asset($value);
    }
}
