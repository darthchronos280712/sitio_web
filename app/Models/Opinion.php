<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    // Indica que este modelo usa la tabla 'mensajes'
    protected $table = 'mensajes';

    protected $fillable = [
        'nombre',
        'email',
        'mensaje',
    ];
}

