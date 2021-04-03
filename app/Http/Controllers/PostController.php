<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::paginate(10);
        return view('admin/dashboard-posts',['posts'=>$posts]);
    }

    public function create(){
        $tags = Tag::all();
        return view('admin/dashboard-posts-create',['tags'=>$tags]);
    }

    public function store(Request $request)
    {
        $inputs =  $request->validate([
            'title'=>'required',
            'author'=>'required',
            'image'=>'file',
            'content'=>'required',
            'category'=>'required',


        ]);
        $tag = Tag::find($request->tag);

        if ($request->image){

            $inputs['image'] = $request->image->store('images');
        }


        $post = auth()->user()->posts()->create($inputs);
        $post->tags()->save($tag);

        $request->session()->flash('post-created-message',$inputs['title'].' post was Created');
        return redirect()->route('dashboard.posts');
    }


    public function edit(Post $post)
    {
        //
        $tags = Tag::all();
        return view('admin/dashboard-post-edit',['product'=>$post,'tags'=>$tags]);
    }

    public function update(Request $request, Post $post)
    {
        //
        $inputs =  $request->validate([
            'title'=>'required',
            'image'=>'file',
            'content'=>'required',


        ]);


        if ($request->image){

            $inputs['image'] = $request->image->store('images');
            $post->image = $inputs['image'];
        }

        $post->title = $inputs['title'];
        $post->content = $inputs['content'];
        $post->category = $inputs['category'];

        $post->save();
        if ($request->tag) {
            $tag = Tag::find($request->tag);

            $post->tags()->save($tag);
        }
        $request->session()->flash('post-updated-message',$inputs['title'].' Post was updated');
        return redirect()->route('dashboard.posts');
    }

    public function destroy(Post $post)
    {
        //

        $post->delete();
        Session::flash('message','Product was deleted');
        return back();
    }
}
