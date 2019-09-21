<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyMakerProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_maker_processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('money_maker_id');
            $table->string('money_maker_process_name');
            $table->string('money_maker_process_type');
            $table->string('money_maker_process_status');
            $table->float('money_maker_process_price');
            $table->float('money_maker_process_remainPrice');
            $table->date('money_maker_process_date');
            $table->text('money_maker_process_notes');
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
        Schema::dropIfExists('money_maker_processes');
    }
}
