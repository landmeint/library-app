<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index() {
        $book = Book::all();
        return view('book.index', ['books' => $book]);
    }

    public function create()
    {
        $book = Book::get();
        return view('book.create.create', ['books' => $book]);
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'publication' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
    	]);
 
        Book::create([
    		'title' => $request['title'],
            'writer' => $request['writer'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'stock' => $request['stock'],
            'category_id' => $request['category_id']
    	]);
 
    	return redirect('/book');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', ['books' => $book]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'writer' => 'required',
            'publisher' => 'required',
            'publication' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ]);

        $book = Book::find($id);
        $book-> title = $request['title'];
        $book-> writer = $request['writer'];
        $book-> publisher = $request['publisher'];
        $book-> publication = $request['publication'];
        $book-> stock = $request['stock'];
        $book-> category_id = $request['category_id'];
        $book-> update();
        return redirect('/book');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book -> delete();
        return redirect('/book');
    }
}
