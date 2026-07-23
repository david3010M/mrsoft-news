<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('product_prices');
    }

    public function down(): void
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
            $table->enum('period', ['monthly', 'annual', 'quote']);
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_quote')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->json('features')->nullable();
            $table->string('quote_message')->nullable();
            $table->timestamps();
        });
    }
};
