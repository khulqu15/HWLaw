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
        Schema::create('posts', function(Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('cover');
            $table->string('location');
            $table->string('date');
            $table->uuid('category_post_id');
            $table->foreign('category_post_id')->references('id')->on('category_posts')->onDelete('CASCADE');
            $table->longText('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
