<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'sugerencia_id'
    ];

    public function sugerencia()
    {
        return $this->belongsTo('App\Models\sugerencia');
    }
    public function comentarios()
    {
        return $this->hasMany('App\Models\comentario');
    }
}
