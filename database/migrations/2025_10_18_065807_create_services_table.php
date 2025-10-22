<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('href')->unique()->nullable(); // slug or URL path
            $table->string('photo')->nullable();
            $table->text('overview')->nullable();
            $table->text('whats_included')->nullable();
            $table->text('use_cases')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(1)->comment('1 = Active, 0 = Inactive');
            $table->softDeletes(); // adds deleted_at column
            $table->timestamps();  // adds created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

