<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index(){
        $reviews = review::paginate(10);
        return view('admin.dashboard-reviews',['reviews'=>$reviews]);
    }

    public function edit(Request $request){
        $review = review::findOrFail($request->id);
        $review->status = $request->status;
        $review->save();
        $request->session()->flash('review-updated-message'.' review was Updated');
        return redirect()->route('dashboard.reviews');
    }

    public function delete(Request $request){
        $review = review::findOrFail($request->id);
        $review->delete();
        $request->session()->flash('review-deleted-message'.' review was Deleted');

        return redirect()->route('dashboard.reviews');
    }
}
