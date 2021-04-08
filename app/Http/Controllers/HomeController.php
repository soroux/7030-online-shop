<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
        $comments = $post->comments()->where('status','verified')->get();
        $carts = Cart::content();
        $cart_total = Cart::total();
        return view('post',[
            'comments' => $comments,
            'carts'=>$carts,
            'cart_total'=>$cart_total,
            'post'=>$post]);
    }


    public function createComment(Request $request,Post $post){
    $input = $request->validate([
        'name'=>'required',
        'content'=>'required',
    ]);
    $input['email'] = $request->email;

  $comment = $post->Comments()->create($input);
   return redirect()->route('blog.post',$post);

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
        $reviews = $product->Reviews()->where('status','verified')->get();
        $carts = Cart::content();
        $cart_total = Cart::total();
        return view('product-details',[
            'reviews'=>$reviews,
            'product'=>$product,
            'carts'=>$carts,
            'cart_total'=>$cart_total,

        ]);
    }


    public function createReview(Request $request,Product $product){
        $input = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'rating'=>'required',
            'content'=>'required'
        ]);

        $review = $product->Reviews()->create($input);
        return redirect()->route('view',$product);

    }
}
