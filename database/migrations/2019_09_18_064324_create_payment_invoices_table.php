<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_invoice_name');
            $table->float('payment_invoice_price');
            $table->string('payment_invoice_personName');
            $table->string('payment_invoice_whom');
            $table->date('payment_invoice_date');
            $table->string('payment_invoice_type');
            $table->text('payment_invoice_notes');
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
        Schema::dropIfExists('payment_invoices');
    }
}
