<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
class BorrowController extends Controller
{
    public function index() {
        $borrows = Borrow::all();
        return view('borrow.index',compact('borrows'));
    }

    public function create() {
        return view('borrow.create.create', [
            'books' => Book::all(),
            'users' => User::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'officer_name' => 'required',
            'total' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_balik' => 'required',
            'user_id' => 'required',
            'book_id' => 'required'
        ]);
 
        Borrow::create([
    		'officer_name' => $request['officer_name'],
            'total' => $request['total'],
            'start_date' => $request['tanggal_pinjam'],
            'back_date' => $request['tanggal_balik'],
            'user_id' => $request['user_id'],
            'book_id' => $request['book_id']
    	]);
 
    	return redirect('borrow');
    }
    public function edit(string $id)
    {
        $borrowID = Borrow::findorFail($id);
        return view('borrow.edit',[
            'borrowID'=>$borrowID,
            'users' => User::all(),
            'books' => Book::all(),
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'officer_name' => 'required',
            'total' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_balik' => 'required',
            'user_id' => 'required',
            'book_id' => 'required'
        ]);;

        $book = Borrow::find($id);
        $book-> officer_name = $request['officer_name'];
        $book-> total = $request['total'];
        $book-> start_date = $request['tanggal_pinjam'];
        $book-> back_date = $request['tanggal_balik'];
        $book-> user_id = $request['user_id'];
        $book-> book_id = $request['book_id'];
        $book-> update();
        return redirect('borrow');
    }
    public function destroy($id)
    {
        $borrowID = Borrow::find($id);
        $borrowID->delete();
        return redirect('/borrow');
    }
}
