<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $book = Book::all();
        return view('book.index', ['book' => $book]);
    }

    public function create()
    {
        $book = Book::get();
        return view('book.create', ['book' => $book]);
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'publication' => 'required',
            'stock' => 'required',
            'categories_id' => 'required'
    	]);
 
        Book::create([
    		'title' => $request['title'],
            'writer' => $request['writer'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'stock' => $request['stock'],
            'categories_id' => $request['categories_id']
    	]);
 
    	return redirect('/book');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show', ['book' => $book]);
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', ['book' => $book]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'writer' => 'required',
            'publisher' => 'required',
            'publication' => 'required',
            'stock' => 'required',
            'categories_id' => 'required'
        ]);

        $book = Book::find($id);
        $book-> title = $request['title'];
        $book-> writer = $request['writer'];
        $book-> publisher = $request['publisher'];
        $book-> publication = $request['publication'];
        $book-> stock = $request['stock'];
        $book-> categories_id = $request['categories_id'];
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
