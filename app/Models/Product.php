<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable
{
    use HasFactory;
    protected $guarded = [];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Reviews(){
        return $this->hasMany(Review::class);
    }
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function setPriceAttribute($value){

        $this->attributes['price'] = (int)$value;
    }
    public function setInventoryAttribute($value){

        $this->attributes['inventory'] = (int)$value;
    }
    public function getProductImageAttribute($value){

        return asset($value);
    }

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

    public function getBuyableProductImage($options = null)
    {
        return $this->product_image;
    }

}
