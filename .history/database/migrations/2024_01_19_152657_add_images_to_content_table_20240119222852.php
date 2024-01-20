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
        Schema::table('content', function (Blueprint $table) {
            $table->string('logo_image')->nullable();
            $table->string('about_image')->nullable();
            $table->string('area_image')->nullable();
            $table->string('contact_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('content', function (Blueprint $table) {
            //
        });
    }
};
