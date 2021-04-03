<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(5);

        return view('admin/dashboard-products',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        return view('/admin/dashboard-product-create',['tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs =  $request->validate([
            'name'=>'required',
            'product_image'=>'file',
            'content'=>'required',
            'category'=>'required',
            'price'=>'required',
            'inventory'=>'required',
            'description'=>'required',


        ]);
        $tag = Tag::find($request->tag);

        if ($request->product_image){

            $inputs['product_image'] = $request->product_image->store('images');
        }

        if ($request->featured){
            $inputs['featured'] = '1';
        }

       $product = auth()->user()->products()->create($inputs);
        $product->tags()->save($tag);

        $request->session()->flash('product-created-message',$inputs['name'].' Product was Created');
        return redirect()->route('dashboard.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

        return view('product_details',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $tags = Tag::all();
        return view('admin/dashboard-product-edit',['product'=>$product,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $inputs =  $request->validate([
            'name'=>'required',
            'product_image'=>'file',
            'content'=>'required',
            'category'=>'required',
            'price'=>'required',
            'inventory'=>'required',


        ]);



        if ($request->product_image){

            $inputs['product_image'] = $request->product_image->store('images');
            $product->product_image = $inputs['product_image'];
        }

        $product->name = $inputs['name'];
        $product->content = $inputs['content'];
        $product->category = $inputs['category'];
        $product->inventory = $inputs['inventory'];
        $product->price = $inputs['price'];
        if ($request->featured){
            $product->featured = '1';
        }else {
            $product->featured = '0';
        }
        $product->save();
        if ($request->tag) {
            $tag = Tag::find($request->tag);

            $product->tags()->save($tag);
        }
        $request->session()->flash('product-updated-message',$inputs['name'].' Product was updated');
        return redirect()->route('dashboard.products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //

        $product->delete();
        Session::flash('message','Product was deleted');
        return back();
    }

}
