<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id(); // ID del registro
            $table->foreignId('empleado_id')->constrained('empleados'); // FK: Relación con empleados.id
            $table->date('fecha'); // Día de la actividad
            $table->integer('entregas'); // Cantidad de entregas realizadas
            $table->boolean('suplencia'); // Indica si cubrió a otro compañero
            $table->decimal('bono_aplicado', 10, 2); // Monto calculado del bono
        });
    }

    public function down(): void { Schema::dropIfExists('movimientos'); }
};
