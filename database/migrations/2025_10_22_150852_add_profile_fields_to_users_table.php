<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->after('name');
            $table->string('phone')->nullable()->after('email');
            $table->string('photo')->nullable()->after('phone');
            $table->boolean('status')->default(1)->after('photo'); // 1 = active, 0 = disabled
            $table->string('role')->default('admin')->after('status'); // only admin for now
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'phone', 'photo', 'status', 'role']);
        });
    }
};
