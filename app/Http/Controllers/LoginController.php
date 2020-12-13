<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function index() {
    	return view('user.login');
    }
    public function logOut() {
    	Auth::logout();
    	return redirect()->route('login');
    	dd($currentUser);
    }
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Session::remove('old_user');
            return redirect()->intended('/');
        }
        dd($credentials);
        return view('user.login');
    }
}
