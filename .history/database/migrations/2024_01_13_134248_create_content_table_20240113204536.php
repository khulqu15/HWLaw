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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->string('header_description');
            $table->string('header_motto');
            $table->string('header_motivation_title');
            $table->string('header_motivation_subtitle');
            $table->string('area_motto');
            $table->string('area_title');
            $table->string('area_description');
            $table->string('contact_title');
            $table->string('contact_description');
            $table->string('footer_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
