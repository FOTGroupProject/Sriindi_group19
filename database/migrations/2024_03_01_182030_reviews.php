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
        //
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->bigInteger('product_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('rating');
            $table->text('review');
            $table->date('submit_date');
            $table->timestamps();
            // Add other columns as needed

            // Primary Key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('reviews');
        
    }
};
