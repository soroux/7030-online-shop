<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index(){
        $comments = Comment::paginate(10);
        return view('admin.dashboard-comments',['comments'=>$comments]);
    }

    public function edit(Request $request){
        $comment = Comment::findOrFail($request->id);
        $comment->status = $request->status;
        $comment->save();
        $request->session()->flash('comment-updated-message'.' Comment was Updated');
        return redirect()->route('dashboard.comments');
    }

    public function delete(Request $request){
        $comment = Comment::findOrFail($request->id);
        $comment->delete();
        $request->session()->flash('comment-deleted-message'.' Comment was Deleted');

        return redirect()->route('dashboard.comments');
    }

}
