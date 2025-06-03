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
            // Product name (required) - added by madhu
            $table->string('name');
            // Product description (optional) - added by madhu
            $table->text('description')->nullable();
            // Product price (required) - added by madhu
            $table->float('price');
            // Product stock quantity (required) - added by madhu
            $table->integer('stock_quantity');
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
