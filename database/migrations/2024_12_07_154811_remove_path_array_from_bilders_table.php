<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bilders', function (Blueprint $table) {
            $table->dropColumn('path_array');
        });
    }

    public function down(): void
    {
        Schema::table('bilders', function (Blueprint $table) {
            $table->json('path_array')->nullable();
        });
    }
};