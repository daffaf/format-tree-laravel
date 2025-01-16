<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view ('subcategories.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => [
        //         'required',
        //         'unique:sub_categories,name',
        //         'min:1',
        //         'max:255'
        //     ],
        //     'category_id' => [
        //         'required',
        //         'exists:categories,id'
        //     ],
        // ]);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:sub_categories,name',
            'category_id' => 'required|integer|exists:sub_categories,id',
        ]);
        var_dump($validatedData);
        SubCategory::create($validatedData);
        return redirect()->route('master-data.index')->with('success', 'SubCategory created successfully.');
    }
}
