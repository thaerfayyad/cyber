<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\admin\Book;
use App\Models\admin\Resource;
use App\Models\Comment;
use Illuminate\Http\Request;
use DB;
use Auth;
class AttachmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $book = new Book();
        if(  $request->bookFile != Null){
            $bookName = $book->id.'_book'.time().'.'.request()->bookFile->getClientOriginalExtension();
            $request->bookFile->move('uploads/books',$bookName);
            $book->bookFile = $bookName;
        }
        $book->name = $request->title ;
        $book->details = $request->details ;
        $book->book = $request->book ;
        $book->bookFile = $request->bookFile ;
        $book->status = '0' ;
        $book->save();
        return redirect()->back();
    }
    public function userStore(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        $blog = new Blog();
//        $blog->user_id  =  Auth::user()->id;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->image != Null) {

            $imgName = $blog->id . '_blog' . time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/blogs', $imgName);


            $blog->image = $imgName;
        }
        $blog->save();


        return redirect()->back();
    }
}
