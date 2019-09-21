<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_nid');
            $table->string('client_name',100);
            $table->string('client_type')->nullable();
            $table->string('client_job')->nullable();
            $table->string('client_phone');
            $table->string('client_email')->nullable();
            $table->date('client_birthDate')->nullable();
            $table->string('client_bankAccountNumber')->nullable();
            $table->string('client_idPicFront')->nullable();
            $table->string('client_idPicBack')->nullable();
            $table->text('client_address');
            $table->text('client_notes');
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
        Schema::dropIfExists('clients');
    }
}
