<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use App\Models\admin\Layers;
use App\Models\admin\Threat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class threatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Threat::all();
        return view('admin.threats.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layers = Layers::all();
        return view('admin.threats.create',compact('layers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title_threats'         => 'required|max:255',
            'layer_id'                 => 'required',
            'descriptions_threats'  => 'required',
            'img_threats'           => 'required |image|mimes:jpg,png',
         ]);
        $threat = new Threat();
        $threat->title_threats =$request->title_threats ;
        $threat->layer_id =$request->layer_id;
        $threat->descriptions_threats =$request->descriptions_threats ;

        if(  $request->img_threats != Null){
            $imgName = $threat->id.'_layer'.time().'.'.request()->img_threats->getClientOriginalExtension();

            $request->img_threats->move('uploads/images/layers',$imgName);


            $threat->img_threats = $imgName;
        }

        $threat->save();

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
        $threat = Threat::findOrFail($id);
        $layers = Layers::all();

        return view('admin.threats.edit' , compact('threat','layers'));
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
//        dd($request->all());

        $layer = Threat::findOrFail($id);
        $layer->title_threats =$request->title_threats ;
        $layer->layer_id =$request->layer_id;
        $layer->descriptions_threats =$request->descriptions_threats ;

        if(  $request->img_threats != Null){
            $imgName = $layer->id.'_layer'.time().'.'.request()->img_threats->getClientOriginalExtension();

            $request->img_threats->move('uploads/images/layers',$imgName);


            $layer->img_threats = $imgName;
        }

        $layer->save();

        return redirect()->route('layers.index')
            ->with('success', 'Layers updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->route('books.index')
            ->with('success', 'Book Deleted Successfully');
    }
}
