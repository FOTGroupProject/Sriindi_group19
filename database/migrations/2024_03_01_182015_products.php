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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();;
            $table->string('sdescription');
            $table->string('image')->nullable();
            $table->string('sku')->unique();
            $table->string('category');
            $table->integer('quantity');
            $table->decimal('regularprice', 10, 2);
            $table->decimal('salesprice', 10, 2);
            $table->timestamps();
            $table->string('supplier_id');
            // Add other columns as needed
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products');
    }
};
