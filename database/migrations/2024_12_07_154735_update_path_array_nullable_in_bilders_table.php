<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bilders', function (Blueprint $table) {
            $table->json('path_array')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('bilders', function (Blueprint $table) {
            $table->json('path_array')->nullable(false)->change();
        });
    }
};