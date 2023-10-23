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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained();
            $table->string('pagamento');
            $table->string('envio');
            $table->string('vendedor');
            $table->string('descricao')->nullable();
            $table->decimal('valor', 10, 2)->nullable();
            $table->enum('status', ['aguardando', 'enviado', 'cancelado'])->default('aguardando');
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
