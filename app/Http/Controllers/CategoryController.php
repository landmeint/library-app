<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category = DB::table('category') -> get();
        return view('category.index', ['category' => $book]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'name' => 'required'
        ]);

        DB::table('category')->insert([
            'name' => $request['name']
        ]);
        return redirect('/category');
    }

    public function show($id) {
        $category = DB::table('category') -> where('id', $id) -> first();
        return view('category.detail', ['category' => $category]);
    }

    public function edit($id) {
        $category = DB::table('category') -> find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update($id, Request $request) {
        $request -> validate([
            'name' => 'required'
        ]);

        DB::table('category')-> where('id', $id) -> update([
            'name' => $request['name']
        ]);
        return redirect('/category');
    }

    public function destroy($id) {
        DB::table('category') -> where('id', $id) -> delete();
        return redirect('/category');
    }
}
