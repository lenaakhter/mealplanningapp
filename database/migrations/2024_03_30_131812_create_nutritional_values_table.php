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
        Schema::create('nutritional_values', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('age_lower_bound')->references('age_lower_bound')->on('age_range')->onDelete('cascade');
            $table->integer('age_upper_bound')->references('age_upper_bound')->on('age_range')->onDelete('cascade');
            $table->string('gender');
            $table->integer('calories_lower');
            $table->integer('calories_upper');
            $table->decimal('protein_lower', 5, 2);
            $table->decimal('protein_upper', 5, 2);
            $table->decimal('carbohydrates_lower', 5, 2);
            $table->decimal('carbohydrates_upper', 5, 2);
            $table->decimal('fats_lower', 5, 2);
            $table->decimal('fats_upper', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritional_values');
    }
};
