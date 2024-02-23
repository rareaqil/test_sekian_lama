<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\File;


class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'file' => 'required',
                'author' => 'required',
            ]);

            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName(); // Add timestamp to file name
            $file->move(public_path('uploads'), $fileName);

            File::create([
                'title' => $request->title,
                'file_path' => $fileName,
                'author' => $request->author,
            ]);

            return redirect()->route('files.index')->with('success', 'File uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error uploading file: '.$e->getMessage());
        }
    }

}
