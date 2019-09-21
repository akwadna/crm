<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('product_type_id');
            $table->integer('product_serial');
            $table->string('product_name');
            $table->integer('product_sellPrice');
            $table->integer('product_purchasePrice')->nullable();
            $table->float('product_vat')->nullable();
            $table->float('product_extVat')->nullable();
            $table->float('product_totalPrice');
            $table->string('product_status');
            $table->string('product_shipStatus');
            $table->string('product_pic')->nullable();
            $table->string('product_gallery')->nullable();
            $table->text('product_notes');
            $table->integer('user_id');
            $table->integer('delete_status')->default(1);
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
}
