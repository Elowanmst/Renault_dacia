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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('picture')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('fuel')->nullable();
            $table->string('description')->nullable();
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('puissance')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->enum('type', ['new', 'used'])->default('new');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
