<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\admin\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index()
    {
    $items = Resource::all();
        return view('admin.resources.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'title' => 'required',
            'link'  => 'required',
            'filed' => 'required',

            ]);
        $resources = new Resource();
        $resources->title =$request ->title;
        $resources->link =$request ->link;
        $resources->filed =$request ->filed;
        if(  $request->icon != Null){

            $imgName = $resources->id.'_icon'.time().'.'.request()->icon->getClientOriginalExtension();

            $request->icon->move('uploads/images/icons',$imgName);


            $resources->icon = $imgName;
        }
        $resources ->save();

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
        $item = Resource::findOrFail($id);
        return view('admin.resources.edit',compact('item'));

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
        $item = Resource::findOrFail($id);
        $item->title =$request ->title;
        $item->link =$request ->link;
        $item->filed =$request ->filed;
        if(  $request->icon != Null){

            $imgName = $item->id.'_icon'.time().'.'.request()->icon->getClientOriginalExtension();

            $request->icon->move('uploads/images/icons',$imgName);


            $item->icon = $imgName;
        }
        $item ->save();
        return redirect()->route('resources.index')
            ->with('success', 'Resources updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resource::findOrFail($id)->delete();
        return redirect()->route('resources.index')
            ->with('success', 'Resources Deleted Successfully');
    }
}
