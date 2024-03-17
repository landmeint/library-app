<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        if($user = Auth::user()) {
            return redirect()->intended('/');
        }
        return view('login.login');
    }

    public function loading(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => 'Username belum terisi',
        ]
        );

        $kredensial = $request->only('username', 'password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if( $user ) {
                return redirect()->intended('/');
            } 

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username / password salah'
        ])->onlyInput('username');
    }

    public function regispage() {
       
        return view('login.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ];

        User::create($data);

        return redirect('login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    
}
