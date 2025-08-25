<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('air_data', function (Blueprint $table) {
            $table->id();
            $table->string('mq1');
            $table->string('mq2');
            $table->string('mq3');
            $table->string('mq4');
            $table->string('mq5');
            $table->string('mq6');
            $table->string('co2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_data');
    }
};
