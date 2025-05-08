<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    public function index()
    {
        $lagu = Lagu::all();
        return view('lagu.index', compact('lagu'));
    }

    public function store(Request $request)
    {
        Lagu::create($request->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'genre' => 'required',
            'durasi' => 'required|numeric'
        ]));

        return redirect()->back();
    }

    public function update(Request $request, Lagu $lagu)
    {
        $lagu->update($request->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'genre' => 'required',
            'durasi' => 'required|numeric'
        ]));

        return redirect()->back();
    }
}
