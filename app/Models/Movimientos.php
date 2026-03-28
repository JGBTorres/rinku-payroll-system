<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movimiento extends Model
{
    use HasFactory;

    protected $table = 'movimientos';
    public $timestamps = false;

    protected $fillable = [
        'empleado_id',
        'fecha',
        'entregas',
        'suplencia',
        'bono_aplicado'
    ];
    //Relacion con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
