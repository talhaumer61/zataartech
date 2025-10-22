<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();

            $table->boolean('status')->default(1);
            $table->string('client_name');
            $table->string('designation')->nullable();
            $table->string('photo')->nullable();
            $table->text('review')->nullable();

            // Optional link to a service
            $table->unsignedBigInteger('id_service')->nullable();
            $table->foreign('id_service')
                  ->references('id')
                  ->on('services')
                  ->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
