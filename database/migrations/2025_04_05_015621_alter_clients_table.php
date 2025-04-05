<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->constrained('types');
            $table->string('departamento');
            $table->string('imagen_referencia')->nullable();
            $table->string('flyer_bienvenida')->nullable();
            $table->string('flyer_informativo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
            $table->dropColumn('type_id');
            $table->dropColumn('departamento');
            $table->dropColumn('imagen_referencia');
            $table->dropColumn('flyer_bienvenida');
            $table->dropColumn('flyer_informativo');
        });
    }
};
