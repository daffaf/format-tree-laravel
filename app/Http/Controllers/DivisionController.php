<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    //
    public function index()
    {
        $divisions = Division::all();
        return view ('divisions.index', compact('divisions'));
    }
    public function create()
    {
        return view('divisions.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Division::create($validatedData);

        return redirect()->route('master-data.index')->with('success', 'Division created successfully.');
    }
}
