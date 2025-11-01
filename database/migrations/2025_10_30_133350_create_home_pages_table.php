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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);

            // Services Section
            $table->string('services_tag')->nullable();
            $table->string('services_heading')->nullable();
            $table->text('services_desc')->nullable();

            // Section 1
            $table->string('section1_tag')->nullable();
            $table->string('section1_heading')->nullable();
            $table->text('section1_desc')->nullable();
            $table->string('section1_btn_text')->nullable();
            $table->string('section1_url')->nullable();
            $table->string('section1_image1')->nullable();
            $table->string('section1_image2')->nullable();

            // Section 2
            $table->string('section2_tag')->nullable();
            $table->string('section2_heading')->nullable();
            $table->text('section2_desc')->nullable();
            $table->string('section2_btn_text')->nullable();
            $table->string('section2_url')->nullable();
            $table->string('section2_image1')->nullable();
            $table->string('section2_image2')->nullable();

            // Success Stories Section
            $table->string('success_stories_tag')->nullable();
            $table->string('success_stories_heading')->nullable();
            $table->text('success_stories_desc')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
