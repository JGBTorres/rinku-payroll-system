<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    public $timestamps = false;

    protected $fillable = [
        'uuid',
        'numero_empleado',
        'nombre',
        'tipo',
        'role_id',
        'fecha_ingreso',
        'activo'
    ];

    //Relacion con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'role_id');
    }

//Relacion con el modelo Movimiento
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'empleado_id');
    }
//Relacion con el modelo NominaMensual
    public function nominas()
    {
        return $this->hasMany(NominaMensual::class, 'empleado_id');
    }
}
