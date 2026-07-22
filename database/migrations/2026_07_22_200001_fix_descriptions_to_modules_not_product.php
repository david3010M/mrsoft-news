<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['short_description', 'description']);
        });

        Schema::table('product_prices', function (Blueprint $table) {
            $table->string('short_description')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('short_description')->nullable()->after('name');
            $table->text('description')->nullable()->after('short_description');
        });

        Schema::table('product_prices', function (Blueprint $table) {
            $table->dropColumn('short_description');
        });
    }
};
