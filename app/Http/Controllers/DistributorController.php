<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Distributor;


class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        return view('distributors.index', compact('distributors'));
    }

    public function create()
    {
        return view('distributors.create');
    }

    public function store(Request $request)
    {
        Distributor::create($request->all());
        return redirect()->route('distributors.index');
    }

    public function edit($id)
    {
        $distributor = Distributor::find($id);

        return view('distributors.edit', compact('distributor'));
    }

    public function update(Request $request, Distributor $distributor)
    {
        $distributor->update($request->all());
        return redirect()->route('distributors.index');
    }
}
