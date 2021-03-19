<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use Illuminate\Http\Request;
use DB;
use Response;

class BookController extends Controller
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
    public function general()
    {


        $books = Book::where('library', 1)->get();

        return view('site.books.book', compact('books'));
    }
    public function student()
    {


       $books = Book::where('library', 2)->get();

        return view('site.books.book', compact('books'));
    }
    public function book()
    {


        $books = Book::where('book', 1)->get();

        return view('site.books.book', compact('books'));
    }
    public function resources()
    {


        $resources = Book::where('book', 2)->get();

        return view('site.books.resource', compact('resources'));
    }
    public function exercises()
    {


        $exercises = Book::where('book', 3)->get();

        return view('site.books.exercises', compact('exercises'));
    }
    public function download($id)
    {

        $filesss = Book::where('id', $id)->firstOrFail();
        $pathToFile = public_path().'/uploads/books/'.$filesss->bookFile;
        return response()->download($pathToFile);
    }
    public function show($id) {
        $filesss = Book::where('id', $id)->firstOrFail();
        $pathToFile = public_path().'/uploads/books/'.$filesss->bookFile;
        $path = storage_path($pathToFile);



        return Response::make(file_get_contents($path), 200, [

            'Content-Type'
            => 'application/pdf',


            'Content-Disposition' => 'inline; filename="'.   $pathToFile.'"'

        ]);
    }

}
