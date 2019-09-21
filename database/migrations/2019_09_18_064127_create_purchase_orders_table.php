<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purchase_order_name');
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->unsignedInteger('offer_id')->nullable();
            $table->float('purchase_order_vat')->nullable();
            $table->float('purchase_order_extVat')->nullable();
            $table->integer('purchase_order_integerDiscount')->nullable();
            $table->float('purchase_order_totalPrice');
            $table->date('purchase_order_date');
            $table->text('purchase_order_notes');
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
        Schema::dropIfExists('purchase_orders');
    }
}
