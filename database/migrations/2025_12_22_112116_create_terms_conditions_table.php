<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('terms_conditions', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1); // 1 = active, 2 = inactive
            $table->string('href')->unique()->nullable();
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamps();
            $table->softDeletes(); // deleted_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('terms_conditions');
    }
};
