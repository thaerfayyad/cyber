<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items  = Book::all();
        return view('admin.books.home',
        [
            'items' =>$items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
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
            'name' => 'required|max:255',
            'details' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'library' => 'required',
            'book' => 'required',
            'bookFile'   => 'required|mimes:doc,pdf,docx,zip'
        ]);

        $book = new Book();
        if(  $request->bookFile != Null){

            $bookName = $book->id.'book'.time().'.'.request()->bookFile->getClientOriginalExtension();
            $request->bookFile->move('uploads/books',$bookName);
            $book->bookFile = $bookName;
        }
        $book->name = $request->name ;
        $book->details = $request->details ;
        $book->author = $request->author ;
        $book->year = $request->year ;
        $book->semester = $request->semester ;
        $book->library = $request->library ;
        $book->book = $request->book ;
        $book->status = '1' ;
        $book->save();
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
        $book = Book::findOrFail($id);

        return view('admin.books.edit' , compact('book'));
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

        $item = Book::findOrFail($id);
        if(  $request->bookFile != Null) {

            $book = $request->file('bookFile');
            $book_new_name = time() . "-" . $book->getClientOriginalName();
            $book->storeAs('uploads/books', $book_new_name);
            $book->bookFile = $book_new_name;
        }

        $item ->update($request->except('_token'));
        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully');

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
    public function changeStatus(Request $request)

        {
            $book = Book::find($request->id);
            $book->status = $request->status;
            $book->save();


            return response()->json(['success'=>'Status change successfully.']);
        }
}
