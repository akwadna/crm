<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyMakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_makers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('money_maker_nid');
            $table->string('money_maker_name',100);
            $table->string('money_maker_processType');
            $table->string('money_maker_job')->nullable();
            $table->string('money_maker_phone');
            $table->integer('money_maker_mount');
            $table->string('money_maker_processStatus');
            $table->string('money_maker_email')->nullable();
            $table->date('money_maker_payDate');
            $table->date('money_maker_birthDate');
            $table->string('money_maker_bankAccountNumber')->nullable();
            $table->string('money_maker_idPicFront')->nullable();
            $table->string('money_maker_idPicBack')->nullable();
            $table->text('money_maker_address');
            $table->text('money_maker_notes');
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
        Schema::dropIfExists('money_makers');
    }
}
