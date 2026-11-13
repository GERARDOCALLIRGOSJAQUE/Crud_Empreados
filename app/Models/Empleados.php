<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = ['Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Correo', 'Foto'];
}
