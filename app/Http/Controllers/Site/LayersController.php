<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use App\Models\admin\Layers;
use Illuminate\Http\Request;
use DB;
class LayersController extends Controller
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
        return view('site/layers.index');
    }


    public function getlayer(Request $request){
        $layer = Layers::where('layer',$request->id)->first();
        return response()->json(['success'=>$layer]);
    }


}
