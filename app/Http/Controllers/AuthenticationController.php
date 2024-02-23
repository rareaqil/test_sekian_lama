<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Bean;

class AuthenticationController extends Controller
{
    public function index() {
        return view('index');
    }

    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        Session::put('username', $username);
        Session::put('password', $password);

        return redirect('home');
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function home() {
        if (!Session::get('username')) return redirect('/');

        $cheapestBean = Bean::where('Price', '>', 0)
                    ->orderBy('Price')
                    ->first();
        return view('home', ['cheapestBean' => $cheapestBean]);
    }
}
