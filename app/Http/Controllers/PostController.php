<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $posts = Post::all();
        return view('post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'name'=>['required'],
            'title'=>['required'],
            'content'=>['required'],
            'likes'=>['required'],
       ]);
        $review = new Post();
        $review->name = $request->input('name');
        $review->title = $request->input('title');
        $review->content = $request->input('content');
        $review->likes = $request->input('likes');
        $review->save();

        return redirect()->route('post.index');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('post.show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $posts = Post::find($id);
        return view('post.edit',['posts'=>$posts]);

    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>['required'],
            'title'=>['required'],
            'content'=>['required'],
            'likes'=>['required'],
       ]);
        $review = Post::find($id);
        $review->name = $request->input('name');
        $review->title = $request->input('title');
        $review->content = $request->input('content');
        $review->likes = $request->input('likes');
        $review->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('post.index');
    }
}
