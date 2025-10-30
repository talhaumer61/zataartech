<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->string('heading')->nullable()->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn('heading');
        });
    }
};
