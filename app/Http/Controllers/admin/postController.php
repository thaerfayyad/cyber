<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\book;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Post::all();
        return view('admin.news.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title' => 'required|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        if(  $request->image != Null){

            $imgName =$post->id.'_news'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/posts',$imgName);


            $post ->image= $imgName;
        }
       $post->title =$request->title;
       $post->short_description =$request->short_description;
       $post->description =$request->description;
       $post->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item =Post::findOrFail($id);
        return view('admin.news.edit',compact('item'));
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
        $post = Post::findOrfail($id);
        if(  $request->image != Null){

            $imgName =$post->id.'_news'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/posts',$imgName);


            $post ->image= $imgName;
        }
        $post->title =$request->title;
        $post->short_description =$request->short_description;
        $post->description =$request->description;
        $post->save();
        return redirect()->route('news.index')->with('success','The Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrfail($id)->delete();
        return redirect()->route('news.index')->with('success','The Post Deleted Successfully');
    }
}
