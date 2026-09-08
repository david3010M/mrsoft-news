<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->boolean('destacado')->default(false);
            $table->string('url');
            $table->boolean('active')->default(true);
            $table->foreignId('client_id')->nullable()->constrained()->nullOnDelete();
            // El producto es obligatorio: todo testimonio pertenece a un producto.
            $table->foreignId('product_id')->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
