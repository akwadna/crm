<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name',100);
            $table->string('company_phone1');
            $table->string('company_phone2')->nullable();
            $table->string('company_email')->nullable();
            $table->date('company_startDate')->nullable();
            $table->date('company_endDate')->nullable();
            $table->boolean('company_status');
            $table->string('company_inchargeName');
            $table->string('company_inchargePhone');
            $table->string('company_inchargeJob')->nullable();
            $table->string('company_bankAccountNumber')->nullable();
            $table->string('company_pic')->nullable();
            $table->string('company_contractPic1')->nullable();
            $table->string('company_contractPic2')->nullable();
            $table->string('company_contractPic3')->nullable();
            $table->string('company_contractPic4')->nullable();
            $table->string('company_contractPic5')->nullable();
            $table->string('company_contractPic6')->nullable();
            $table->text('company_address');
            $table->text('company_notes');
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
        Schema::dropIfExists('companies');
    }
}
