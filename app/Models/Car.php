<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'year_id',
        'make_id',
        'model_id',
        'type_id',
        'vin',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
