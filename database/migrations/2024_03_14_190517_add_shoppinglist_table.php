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
        Schema::create('shoppinglist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->references('id')->on('mealplan')->onDelete('cascade');
            $table->dateTime('date_generated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('shoppinglist', function (Blueprint $table) {
            //
        });
    }
};
