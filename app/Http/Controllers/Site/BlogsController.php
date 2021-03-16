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
class BlogsController extends Controller
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

    public function index()

    {
        $comment = Comment::all();
        $items =Blog::paginate(2);
        return view('site.blogs.blog',compact('items','comment'));
    }
    public function show($id)
    {

        $item = Blog::findOrFail($id);
        $comments = Comment::where('post_id' , $id)->get();

        // return $item->comments;
        return view('site.blogs.blog_details',compact('item','comments'));
    }


    //ajax add comment
    public function addComment(Request $request){
        // $user = Auth::user()->id;
        $comment = Comment::create([
            'comment'=> $request->post,
            'post_id'=> $request->post_id,
            'user_id'=> Auth::user()->id,
        ]);
       return response()->json((['success'=>$comment]));
    }
public function comments()
    {
        $items = Comment::all();
        return view('admin.blogs.comment',compact('items'));
    }
    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->route('comments.index')
            ->with('success', 'Comments Deleted Successfully');
    }

}
