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
        Schema::create('shoppinglistdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shopping_list_id')->references('id')->on('shoppinglist')->onDelete('cascade');
            $table->foreignId('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
            $table->decimal('total_quantity', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('shoppinglistdetails', function (Blueprint $table) {
            //
        });
    }
};
