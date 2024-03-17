<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('category.index', ['categories' => $category]);
    }

    public function create() {
        return view('category.create.create');
    }

    public function store(Request $request) {
        $officer = Auth::user();
        $category = Category::create([
            'name' => $request->name
        ]);
        return redirect('/category');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('category.edit', ['categories' => $category]);
    }

    public function update($id, Request $request) {
        $request -> validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);
        $category -> name = $request['name'];
        $category -> update();
        return redirect('/category');
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category -> delete();
        return redirect('/category');
    }
}
