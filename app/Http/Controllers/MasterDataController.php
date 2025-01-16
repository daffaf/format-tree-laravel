<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Directorate;
use App\Models\Division;

class MasterDataController extends Controller
{
    //
    public function index()
    {
        $categories = Category::with('subCategories')->get();
        $directorates = Directorate::with('subDirectorates')->get();
        $divisions = Division::all();

        return view('master-data.index', compact('categories', 'directorates', 'divisions'));
    }
}
