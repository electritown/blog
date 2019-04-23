<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::orderBy('created_at','desc')->get();
        return view('post.index')->with('posts',$posts);
    }
    public function postedPosts(){
        $posts=Post::where('isposted','=',1)->orderBy('created_at','desc')->get();
        return view('admin.posts.posted')->with('posts',$posts);
    }

    public function pendingPosts(){
        $posts=Post::where('ispending','=',1)->orderBy('created_at','desc')->get();
        return view('admin.posts.pending')->with('posts',$posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

           
        $tags = Tag::all();
        return view('post.create')->withTags($tags);
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $id = \Auth::user()->id;

        $post = new Post([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'user_id'=>$id,
            ]);    

            $post->save();
        
        if (isset($request->tag)) {
            $post->tags()->sync($request->tag);
            } else {
                $post->tags()->sync(array());
            }
            return redirect('/admin');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $post = Post::find($id);

        return view('post.edit')->with('post',$post);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required']);
        
        $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');    
            $post->save();
            return redirect('/');
    }
    public function approve($id)
    {
    
        Post::where([
            'id'=>$id
        ])->update([
            'ispending'=>0,
            'isposted'=>1
        ]);
        return redirect('/admin');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/');
    }
}
