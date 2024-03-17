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
        return view('borrow.create.create');
    }
    public function store(Request $request){
        $officer = Auth::user();
        $user = User::where('email', $request->input('email_pengguna'))->pluck('id')->first();
        $book = Book::where('id', $request->input('id_buku'))->pluck('id')->first();
        $borrow = Borrow::create([
            'officer_name' => $officer,
            'total' => $request->total,
            'start_date' => $request->tanggal_pinjam,
            'back_date' => $request->tanggal_balik,
            'user_id' => $user,
            'book_id' => $book
        ]);
        return redirect("/borrow");
    }
    public function edit(string $id)
    {
        $borrowID = Borrow::findorFail($id);
        return view('borrow.edit',['borrowID'=>$borrowID]);
    }
    
    public function update(Request $request, string $id)
    {
        $borrowID = Borrow::findorFail($id);
        $officer = Auth::user();
        $user = User::where('email', $request->input('email_pengguna'))->pluck('id')->first();
        $book = Book::where('id', $request->input('id_buku'))->pluck('id')->first();
        $borrowID->update([
            'officer_name' => $officer,
            'total' => $request->total,
            'start_date' => $request->tanggal_pinjam,
            'back_date' => $request->tanggal_balik,
            'user_id' => $user,
            'book_id' => $book
        ]);
        return redirect("/borrow");
    }
    public function destroy($id)
    {
        $borrowID = Borrow::find($id);
        $borrowID->delete();
        return redirect('/borrow');
    }
}
