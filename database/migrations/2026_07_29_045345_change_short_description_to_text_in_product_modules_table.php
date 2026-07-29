<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE product_modules MODIFY name TEXT NOT NULL');
        DB::statement('ALTER TABLE product_modules MODIFY short_description TEXT NULL');
        DB::statement('ALTER TABLE product_modules MODIFY quote_message TEXT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE product_modules MODIFY name VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE product_modules MODIFY short_description VARCHAR(255) NULL');
        DB::statement('ALTER TABLE product_modules MODIFY quote_message VARCHAR(255) NULL');
    }
};
