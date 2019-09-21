<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafeProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safe_processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('safe_process_name');
            $table->string('safe_process_type');
            $table->date('safe_process_date');
            $table->float('safe_process_money');
            $table->unsignedInteger('money_maker_process_id')->nullable();
            $table->unsignedInteger('sales_order_id')->nullable();
            $table->unsignedInteger('purchase_order_id')->nullable();
            $table->unsignedInteger('payment_invoice_id')->nullable();
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
        Schema::dropIfExists('safe_processes');
    }
}
