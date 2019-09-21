<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vendor_nid')->nullable();
            $table->string('vendor_name',100);
            $table->string('vendor_type');
            $table->string('vendor_phone');
            $table->string('vendor_email')->nullable();
            $table->date('vendor_birthDate')->nullable();
            $table->string('vendor_bankAccountNumber')->nullable();
            $table->text('vendor_address');
            $table->text('vendor_notes');
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
        Schema::dropIfExists('vendors');
    }
}
