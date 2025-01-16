<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PDO;

class CategoryController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'unique:categories,name',
                'string',
                'min:1',
                'max:255',
            ],
        ]);
        Category::create($validatedData);
        return redirect()->route('master-data.index')->with('status', 'Category created successfully.');
    }

    
}
