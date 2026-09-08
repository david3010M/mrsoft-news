<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Pivote testimonio <-> tag_testimonio (un testimonio resalta varios motivos).
        Schema::create('testimonio_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('testimonio_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tag_testimonio_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['testimonio_id', 'tag_testimonio_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonio_tags');
    }
};
