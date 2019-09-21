<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('client_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->string('offer_name');
            $table->string('offer_type');
            $table->string('offer_status');
            $table->decimal('offer_percentageDiscount')->nullable();
            $table->integer('offer_integerDiscount')->nullable();
            $table->date('offer_startDate');
            $table->date('offer_endDate');
            $table->text('offer_notes');
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
        Schema::dropIfExists('offers');
    }
}
