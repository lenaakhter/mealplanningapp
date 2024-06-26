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
        Schema::create('meal_plans', function (Blueprint $table) {
            $table->id('mealPlanID')->autoIncrement();
            $table->integer('userID')->references('id')->on('users');
            $table->integer('recipeID')->references('id')->on('recipes');
            $table->string('mealtime');
            $table->string('dayOfWeek');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_plans');
    }
};
