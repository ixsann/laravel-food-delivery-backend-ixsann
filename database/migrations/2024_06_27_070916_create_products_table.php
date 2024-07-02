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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //name
            $table->string('name');
            //description nullable
            $table->string('description');
            //price
            $table->string('price');
            //stock
            $table->string('stock');
            //is available
            $table->string('is_available');
            //is_favorite
            $table->string('is_favorite');
            //image
            $table->string('image');
            //user_id
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
