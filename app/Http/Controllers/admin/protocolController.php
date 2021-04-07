<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use App\Models\admin\Layers;
use App\Models\admin\Protocol;
use App\Models\admin\Threat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class protocolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Protocol::all();
        return view('admin.protocols.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.protocols.create');
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
//
        $request->validate([
            'layer_id'                 => 'required',
            'title_protocol'        => 'required',
            'descriptions_protocol' => 'required|',
         ]);


        $protocol = new Protocol();
        $protocol->title_protocol        =    $request->title_protocol ;
        $protocol->layer_id    =            $request->layer_id;
        $protocol->descriptions_protocol =$request->descriptions_protocol ;

        $protocol->save();

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
        $layer = Layers::findOrFail($id);

        return view('admin.layers.edit' , compact('layer'));
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

        $layer = Layers::findOrFail($id);
        $layer->title_threats =$request->title_threats ;
        $layer->layer =$request->layer;
        $layer->descriptions_threats =$request->descriptions_threats ;
        $layer->title_protocol =$request->title_protocol ;
        $layer->descriptions_protocol =$request->descriptions_protocol ;

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
