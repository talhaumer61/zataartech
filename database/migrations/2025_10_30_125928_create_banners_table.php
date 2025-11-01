<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1); // 1 = active, 0 = inactive
            $table->string('tag')->nullable();
            $table->string('heading')->nullable();
            $table->text('desc')->nullable();
            $table->string('button_text')->nullable();
            $table->string('url')->nullable();
            $table->softDeletes(); // adds deleted_at column
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
