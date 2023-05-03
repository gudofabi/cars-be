<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LavModel;

class Model extends LavModel
{
    use HasFactory;

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
