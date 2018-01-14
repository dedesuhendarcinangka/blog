<?php

namespace App\Http\Controllers;

use App\catagory;
use app\post;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *  \Illuminate\Http\Response
     */
    public function index()
    
        $post = Category::all();
        return view('category.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *  \Illuminate\Http\Response
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
        $data =$request->except('featured_image');
        $data['featured_image']    =   $request->file('featur'public');
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(catagory $catagory)
    {
       return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catagory $catagory)
    {
        $category->update($request->all());
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagory $catagory)
    {
        $category ->delete();
        return redirect('categories');
    }
}
