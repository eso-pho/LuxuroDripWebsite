<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_url');
            $table->text('product_description');
            $table->foreignId('category_id');
            $table->foreignId('inventory_id');
            $table->foreignId('discount_id');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('SKU');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
