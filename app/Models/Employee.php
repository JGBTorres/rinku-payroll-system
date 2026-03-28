<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
    protected $fillable = [
        'uuid',
        'numero_empleado',
        'nombre',
        'tipo',
        'role_id',
        'fecha_ingreso',
        'activo'
    ];

    // Generar el UUID automáticamente al crear un empleado
    protected static function booted()
    {
        static::creating(fn ($employee) => $employee->uuid = (string) Str::uuid());
    }

    // Relación con el Rol (El Empleado PERTENECE a un Rol)
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
