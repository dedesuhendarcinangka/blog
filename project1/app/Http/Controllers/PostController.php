<?php

namespace App\Http\Controllers;
use app\category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    ///
     
    public function index()
    {
        $posts = post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @ \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @  \Illuminate\Http\Request  $request
     * @ \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('featured_image');
        $data['featured_image']  =  $request->file('featured_image')->store('photo','public');
            post::create($data);
            return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @\App\Post  $post
     * @r\Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->view+=1;
        $post->save();
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->except('featured_image');
        $data['featured_image']  =   $request->file('featured_image')->store('photo','public');
            $post->update($data);
            return redirect('post');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('post');
    }
}
