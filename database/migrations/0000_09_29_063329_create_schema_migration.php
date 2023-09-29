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
        // Drop Schema If Exists
        DB::statement('DROP SCHEMA IF EXISTS usr CASCADE');

        // Create new Schema
        DB::statement('CREATE SCHEMA usr');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schema_migration');
    }
};
