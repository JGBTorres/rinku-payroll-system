<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Primary Key incremental
            $table->string('nombre'); // Nombre del puesto (Chofer, Cargador, Auxiliar)
            $table->decimal('bono_por_hora', 10, 2); // Pago extra por hora según rol
        });
    }

    public function down(): void { Schema::dropIfExists('roles'); }
};
