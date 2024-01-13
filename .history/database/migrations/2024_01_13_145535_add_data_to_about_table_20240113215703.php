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
        Schema::table('about', function (Blueprint $table) {
            $table->string('about_title');
            $table->string('about_description');
            $table->string('content_motto');
            $table->string('content_title');
            $table->string('benefit1');
            $table->string('benefit1_text');
            $table->string('benefit2');
            $table->string('benefit2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about', function (Blueprint $table) {
            //
        });
    }
};
