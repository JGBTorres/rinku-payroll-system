<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NominaMensual extends Model
{
    use HasFactory;


    protected $table = 'nominas_mensuales';
    public $timestamps = false;

    protected $fillable = [
        'empleado_id',
        'mes',
        'anio',
        'sueldo_base_total',
        'bonos_total',
        'entregas_total',
        'vales_despensa',
        'isr_retencion',
        'sueldo_neto',
        'fecha_calculo'
    ];

  //Relacion la nomina mensual con el modelo Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
