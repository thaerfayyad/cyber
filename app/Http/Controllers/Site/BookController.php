<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\admin\Book;
use Illuminate\Http\Request;
use DB;
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

        return view('site.books.index', compact('books'));
    }
    public function student()
    {


       $books = Book::where('library', 2)->get();

        return view('site.books.index', compact('books'));
    }
    public function book()
    {


        $books = Book::where('book', 1)->get();

        return view('site.books.index', compact('books'));
    }
    public function resources()
    {


        $books = Book::where('book', 2)->get();

        return view('site.books.index', compact('books'));
    }
    public function exercises()
    {


        $books = Book::where('book', 3)->get();

        return view('site.books.index', compact('books'));
    }

}
