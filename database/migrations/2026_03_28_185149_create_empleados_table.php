<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->uuid('uuid')->unique(); // Identificador único para la API
            $table->string('numero_empleado')->unique(); // Código interno (ej. EMP001)
            $table->string('nombre'); // Nombre completo
            $table->string('tipo'); // 'Interno' o 'Externo'
            $table->foreignId('role_id')->constrained('roles'); // FK: Relación con roles.id
            $table->date('fecha_ingreso'); // Para cálculos de antigüedad
            $table->boolean('activo')->default(true); // Estado laboral
        });
    }

    public function down(): void { Schema::dropIfExists('empleados'); }
};
