<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tag = motivo / característica de un producto ("Facilidad de uso",
        // "Soporte técnico"...). Módulo propio, referenciado por los testimonios.
        Schema::create('tag_testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tag_testimonios');
    }
};
