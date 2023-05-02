<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getBookbyCategory(Request $request)
    {
        $books = Category::where('id',$request->id)->get();
        return view('category',compact('books'));
    }
}
