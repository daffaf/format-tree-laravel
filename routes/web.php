<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectoratesController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\SubDirectoratesController;
use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('sub-categories', SubCategoryController::class);
Route::resource('directorates', DirectoratesController::class);
Route::resource('sub-directorates', SubDirectoratesController::class);
Route::resource('divisions', DivisionController::class);

Route::get('/', [MasterDataController::class, 'index'])->name('master-data.index');