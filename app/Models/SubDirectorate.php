<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDirectorate extends Model
{
    //
    protected $fillable = ['name', 'directorate_id'];
    public function Directorates()
    {
        return $this->belongsTo(Directorate::class);
    }
}
