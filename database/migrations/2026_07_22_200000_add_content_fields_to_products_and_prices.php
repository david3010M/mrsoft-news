<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('short_description')->nullable()->after('name');
            $table->text('description')->nullable()->after('short_description');
            $table->json('features')->nullable()->after('description');
        });

        Schema::table('product_prices', function (Blueprint $table) {
            $table->string('description')->nullable()->after('name');
            $table->boolean('is_featured')->default(false)->after('is_quote');
            $table->json('features')->nullable()->after('is_featured');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['short_description', 'description', 'features']);
        });

        Schema::table('product_prices', function (Blueprint $table) {
            $table->dropColumn(['description', 'is_featured', 'features']);
        });
    }
};
