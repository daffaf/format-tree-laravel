<?php

namespace App\Http\Controllers;

use App\Models\Directorate;
use App\Models\SubDirectorate;
use Illuminate\Http\Request;

class SubDirectoratesController extends Controller
{
    //
    public function create()
    {
        $directorates = Directorate::all();
        return view('subdirectorates.create', compact('directorates'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:sub_directorates,name',
            'directorate_id' => 'required|integer|exists:directorates,id',
        ]);
        
        SubDirectorate::create($validatedData);

        return redirect()->route('master-data.index')->with('success', 'Sub Directorate created successfully.');
    }
}
