<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use App\Models\admin\Book;
use App\Models\admin\Resource;
use Illuminate\Http\Request;
use DB;
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
        $items =Blog::all();
        return view('site.blogs.blog',compact('items'));
    }
    public function show($id)
    {

        $item = Blog::findOrFail($id);
        return view('site.blogs.blog_details',compact('item'));
    }

}
