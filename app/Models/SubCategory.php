<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $fillable = ['name','category_id'];

    public function Categories()
    {
        return $this->belongsTo(Category::class);
    }
}
