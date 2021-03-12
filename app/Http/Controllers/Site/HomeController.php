<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        $items = Post::all();
        return view('site.index' ,compact('items'));

    }
    public function about()
    {
        return view('site.about.index');
    }
    public function create() // create attachment page
    {
      return view('site.attachment.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'description' => 'required',
            'bookFile'   => 'required|mimes:doc,pdf,docx,zip'

        ]);

        if(  $request->bookFile != Null) {

            $attch = $request->file('bookFile');
            $attch_new_name = time() . "-" .  $attch->getClientOriginalName();
            $attch->storeAs('uploads/attachment',  $attch_new_name);
            $attch->bookFile =  $attch_new_name;
        }
       Attachment::create($request->except('_token'));
        return redirect()->route('attachment.create')->with('success','the attachment uploaded successfully');
    }

}
