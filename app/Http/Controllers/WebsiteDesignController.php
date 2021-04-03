<?php

namespace App\Http\Controllers;

use App\Models\Website_design;
use Illuminate\Http\Request;

class WebsiteDesignController extends Controller
{
    //
    public function indexHero(){
        $heroes = Website_design::all()->where('name','hero');
        return view('admin/dashboard-hero',['heroes'=>$heroes]);
    }
    public function indexCategories(){
        $categries = Website_design::all()->where('name','category');
        return view('admin/dashboard-categories',['categories'=>$categries]);

    }
    public function editHero(Website_design $hero){
        return view('admin/dashboard-edit-hero',['hero'=>$hero]);

    }


    public function updateHero(Request $request, Website_design $hero)
    {
        //
        $inputs =  $request->validate([
            'name'=>'required',

        ]);

        if ($request->image){

            $inputs['image'] = $request->image->store('images');
            $hero->image = $inputs['image'];
        }

        $hero->name = $inputs['name'];


        $hero->save();

        $request->session()->flash('product-updated-message',$inputs['name'].' Product was updated');
        return redirect()->route('dashboard.hero');
    }


    public function editCategory(Website_design $category){
        return view('admin/dashboard-edit-category',['category'=>$category]);

    }


    public function updateCategory(Request $request, Website_design $category)
    {
        //
        $inputs =  $request->validate([
            'name'=>'required',

        ]);

        if ($request->popular_categories){

            $inputs['popular_categories'] = $request->popular_categories->store('images');
            $category->image = $inputs['popular_categories'];
        }

        $category->name = $inputs['name'];


        $category->save();

        $request->session()->flash('product-updated-message',$inputs['name'].' Product was updated');
        return redirect()->route('dashboard.categories');
    }
}
