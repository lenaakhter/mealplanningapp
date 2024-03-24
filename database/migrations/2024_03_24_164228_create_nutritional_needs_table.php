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
        Schema::create('nutritional_needs', function (Blueprint $table) {
            $table->id();
            $table->string('age_range');
            $table->string('gender');
            $table->integer('calories');
            $table->decimal('protein_g', 5, 2);
            $table->decimal('carbohydrates_g', 5, 2);
            $table->decimal('fats_g', 5, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritional_needs');
    }
};
