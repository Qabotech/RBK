<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ladens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('bilder_id')->nullable()->constrained('bilders')->cascadeOnDelete();
            $table->foreignId('ort_id')->nullable()->constrained('orts')->cascadeOnDelete();
            $table->foreignId('besiter_id')->nullable()->constrained('besitzers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ladens');
    }
};