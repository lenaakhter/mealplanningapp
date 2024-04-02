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
        Schema::create('shopping_list', function (Blueprint $table) {
            $table->id();
            $table->decimal('quantity_required', 8, 2);
            $table->string('measurement_unit');
            $table->timestamps();
            $table->integer('meal_plan_id')->references('id')->on('meal_plans')->onDelete('cascade');
            $table->integer('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_list');
    }
};
