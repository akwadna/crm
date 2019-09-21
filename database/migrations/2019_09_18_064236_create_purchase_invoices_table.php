<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purchase_invoice_name');
            $table->unsignedInteger('purchase_order_id');
            $table->float('purchase_invoice_originalPrice');
            $table->float('purchase_invoice_invoicePrice');
            $table->float('purchase_invoice_remainPrice');
            $table->date('purchase_invoice_date');
            $table->date('purchase_invoice_exitDate');
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
        Schema::dropIfExists('purchase_invoices');
    }
}
