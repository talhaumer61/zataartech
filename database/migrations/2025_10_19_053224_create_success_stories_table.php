<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('title');
            $table->string('href')->unique();
            $table->unsignedBigInteger('id_service')->nullable()->index();
            $table->string('photo')->nullable();
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->text('results')->nullable();
            $table->longText('description')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_service')
                  ->references('id')
                  ->on('services')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};
