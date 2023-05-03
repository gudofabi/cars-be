<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
