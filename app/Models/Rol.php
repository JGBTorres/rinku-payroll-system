<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';

    public $timestamps = false;

//Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'bono_por_hora'
    ];

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'role_id');
    }
}
