<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages_content', function (Blueprint $table) {
            $table->id();

            $table->string('stories_heading')->nullable();
            $table->text('stories_desc')->nullable();

            $table->string('team_tag')->nullable();
            $table->string('team_heading')->nullable();
            $table->text('team_desc')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages_content');
    }
};
