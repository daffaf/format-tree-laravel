<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    //
    protected $fillable = ['name'];

    public function SubDirectorates()
    {
        return $this->hasMany(SubDirectorate::class);
    }
}
