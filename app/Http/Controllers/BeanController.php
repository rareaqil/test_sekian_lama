<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Bean;


class BeanController extends Controller
{
    public function index()
    {
        if (!Session::get('username')) return redirect('/');

        $beans = Bean::all();
        return view('beanscatalog', ['beans' => $beans]);
    }
}
