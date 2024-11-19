<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comentario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'descripcion',
        'parent_id',
        'user_id',
        'post_id',
    ];
    public function post()
    {
        return $this->belongsTo('App\Models\post');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\comentario', 'parent_id');
    }
    public function respuesta()
    {
        return $this->hasMany('App\Models\post');
    }
}
