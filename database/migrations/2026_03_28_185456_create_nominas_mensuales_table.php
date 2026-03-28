<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('nominas_mensuales', function (Blueprint $table) {
            $table->id(); // Folio de nómina
            $table->foreignId('empleado_id')->constrained('empleados'); // FK: Empleado pagado
            $table->integer('mes'); // Mes de pago
            $table->integer('anio'); // Año de pago
            $table->decimal('sueldo_base_total', 12, 2); // Pago por jornada
            $table->decimal('bonos_total', 12, 2); // Suma total de bonos
            $table->decimal('entregas_total', 12, 2); // Pago por entregas totales
            $table->decimal('vales_despensa', 12, 2); // Cálculo del 4%
            $table->decimal('isr_retencion', 12, 2); // Retención de impuestos (9% o 12%)
            $table->decimal('sueldo_neto', 12, 2); // Lo que el empleado recibe al final
            $table->timestamp('fecha_calculo'); // Fecha y hora del proceso de pago
        });
    }

    public function down(): void { Schema::dropIfExists('nominas_mensuales'); }
};
