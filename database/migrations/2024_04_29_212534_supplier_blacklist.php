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
        Schema::create('supplier_blacklist', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
   
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_blacklist');
    }
};
