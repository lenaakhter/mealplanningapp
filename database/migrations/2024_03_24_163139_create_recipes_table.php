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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meal_id');
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('preparation_time')->nullable();
            $table->integer('cooking_time')->nullable();
            $table->string('serving_size')->nullable();
            $table->integer('calories')->nullable();
            $table->decimal('protein', 8, 2)->nullable();
            $table->decimal('carbohydrates', 8, 2)->nullable();
            $table->decimal('fats', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
