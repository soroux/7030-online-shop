<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Website_design;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $carts = Cart::content();
        $cart_total = Cart::total();
        $products = Product::all();
        $special_products = Product::all()->where('featured',1);
        $heroes = Website_design::all()->where('name','hero');
        $categories = Website_design::all()->where('name','category');

        return view('welcome',[
            'products'=>$products,
            'heroes'=>$heroes,
            'categories'=>$categories,
            'special_products'=>$special_products,
            'carts'=>$carts,
            'cart_total'=>$cart_total]);
    }
    public function shop(){
        $carts = Cart::content();
        $cart_total = Cart::total();
        $products = Product::all();
        $special_products = Product::all()->where('featured',1);


        return view('shop',[
            'products'=>$products,
            'special_products'=>$special_products,
            'carts'=>$carts,
            'cart_total'=>$cart_total]);
    }


    public function blog(){
        $carts = Cart::content();
        $cart_total = Cart::total();
        $posts = Post::all();
        return view('blog',[
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'posts'=>$posts]);
    }

    public function viewPost(Post $post){
        $carts = Cart::content();
        $cart_total = Cart::total();
        return view('post',[
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'post'=>$post]);
    }
    public function quickView(Product $product){
        $carts = Cart::content();
        $cart_total = Cart::total();
        return view('quick-product-view',[
            'product'=>$product,
            'carts'=>$carts,
            'cart_total'=>$cart_total,

        ]);
    }


    public function View(Product $product){
        $carts = Cart::content();
        $cart_total = Cart::total();
        return view('product-details',[
            'product'=>$product,
            'carts'=>$carts,
            'cart_total'=>$cart_total,

        ]);
    }
}
