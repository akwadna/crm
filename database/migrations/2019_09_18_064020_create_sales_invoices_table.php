<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sales_invoice_name');
            $table->unsignedInteger('sales_order_id');
            $table->float('sales_invoice_originalPrice');
            $table->float('sales_invoice_invoicePrice');
            $table->float('sales_invoice_remainPrice');
            $table->date('sales_invoice_date');
            $table->date('sales_invoice_exitDate');
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
        Schema::dropIfExists('sales_invoices');
    }
}
