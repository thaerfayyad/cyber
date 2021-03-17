<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::all();

        return view('admin.blogs.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
            'description' => 'required',
            'image' => 'required',
        ]);
        $blog = new Blog();
        $blog->user_id  =  Auth::user()->id;
        $blog->title  = $request->title;
        $blog->description  = $request->description;

        if(  $request->image != Null){

            $imgName = $blog->id.'_blog'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/blogs',$imgName);


            $blog ->image= $imgName;
        }
        $blog->save();


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
        $item =   Blog::findOrFail($id);
        return  view('admin.blogs.edit',compact('item'));
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
    $item =   Blog::findOrFail($id);

        if(  $request->image != Null) {

            $image = $request->file('image');
            $image_new_name = time() . "-" . $image->getClientOriginalName();
            $image->move('uploads/images/blogs', $image_new_name);
            $image->image = $image_new_name;
        }
        $item->update($request->except('_token'));
        return redirect()->route('blogs.index')->with('success','the blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog Deleted Successfully');


    }

}
