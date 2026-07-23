<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->decimal('monthly', 10, 2)->nullable();
            $table->decimal('annual', 10, 2)->nullable();
            $table->boolean('is_quote')->default(false);
            $table->string('quote_message')->nullable();
            $table->json('features')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_modules');
    }
};
