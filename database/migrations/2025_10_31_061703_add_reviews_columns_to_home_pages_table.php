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
        Schema::table('home_pages', function (Blueprint $table) {
            $table->string('reviews_tag')->nullable()->after('success_stories_desc');
            $table->string('reviews_heading')->nullable()->after('reviews_tag');
            $table->text('reviews_desc')->nullable()->after('reviews_heading');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            $table->dropColumn(['reviews_tag', 'reviews_heading', 'reviews_desc']);
        });
    }
};
