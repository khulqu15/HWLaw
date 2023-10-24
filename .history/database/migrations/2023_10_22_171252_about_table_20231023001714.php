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
        Schema::create('about', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('description');
            $table->string('image1');
            $table->string('image2');
            $table->string('vission');
            $table->string('mission');
            $table->integer('year');
            $table->integer('completed_case');
        })
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
