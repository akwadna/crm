<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salesOrder_name');
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('offer_id')->nullable();
            $table->float('sales_order_vat')->nullable();
            $table->float('sales_order_extVat')->nullable();
            $table->integer('sales_order_integerDiscount')->nullable();
            $table->float('sales_order_totalPrice');
            $table->date('sales_order_date');
            $table->text('sales_order_notes');
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
        Schema::dropIfExists('sales_orders');
    }
}
