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
            $table->string('about_point_title')->after('about_description');
            $table->string('about_point_description')->after('about_point_title');
            $table->string('about_motto')->after('about_title');
            $table->string('news_motto');
            $table->string('news_title');
            $table->string('video_motto');
            $table->string('video_title');
            $table->string('contact_motto');
            $table->string('contact_title');
            $table->string('contact_description');
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
