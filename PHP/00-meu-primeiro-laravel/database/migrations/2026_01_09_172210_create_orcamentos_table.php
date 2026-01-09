<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente'); // Vamos adicionar o nome do cliente no form depois
            $table->decimal('valor_hora', 10, 2);
            $table->integer('total_horas');
            $table->decimal('valor_final', 10, 2);
            $table->timestamps(); // Cria data de criação/edição
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
