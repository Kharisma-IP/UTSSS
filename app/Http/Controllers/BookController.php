<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
   public function getAllBook()
   {
        $book = Book::all();
        return view('index',compact('book'));
   }
   public function getBookById(Request $request)
   {
        $books = Book::where('id',$request->id)->get();
        return view('book-detail',compact('books'));
   }

}
