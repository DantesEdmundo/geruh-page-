<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sugerencia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\post');
    }
}

    /*
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\sugerencia\parent_id');
    }
    public function respuestas()
    {
        return $this->hasMany('App\Models\sugerencia\parent_id');
    }
} /*
