<?php

namespace App\Http\Controllers;

use App\Models\Directorate;
use Illuminate\Http\Request;

class DirectoratesController extends Controller
{
    //
    public function index()
    {
        $directorates = Directorate::with('subDirectorates')->get();
        return view('directorates.index', compact('directorates'));
    }

    public function create()
    {
        return view('directorates.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Directorate::create($validatedData);

        return redirect()->route('master-data.index')->with('success', 'Directorate created successfully.');
    }
}
