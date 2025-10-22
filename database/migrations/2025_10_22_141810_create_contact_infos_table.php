<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1); // Active/Inactive
            $table->string('heading')->nullable(); // Page heading (e.g., "Get In Touch With Us")
            $table->text('description')->nullable(); // Short description/introduction

            $table->string('address1')->nullable(); // Main office address
            $table->string('address2')->nullable(); // Secondary/branch address

            $table->string('phone1')->nullable(); // Primary contact number
            $table->string('phone2')->nullable(); // Secondary contact number

            $table->string('email1')->nullable(); // Primary email
            $table->string('email2')->nullable(); // Secondary email

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
