<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return redirect()->route('loginPage');
    }

    public function loginPage(){
        return view('login');
    }

    public function login(Request $r) {
        $data = [
            'email' => $r->email,
            'password' => $r->password,
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('loginPage');
    }

    public function admin(){
        return view('admin');
    }
}
