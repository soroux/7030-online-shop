<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrecieptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payreciepts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('pay_name');
            $table->string('pay_lastname');
            $table->string('pay_email')->nullable();
            $table->string('pay_phone');
            $table->string('ship_name');
            $table->string('ship_lastname');
            $table->string('ship_email')->nullable();
            $table->text('ship_address');
            $table->string('ship_postcode');
            $table->string('ship_city');
            $table->string('ship_phone');
            $table->integer('amount');
            $table->string('items');
            $table->text('ship_message')->nullable();
            $table->string('pvia')->nullable();
            $table->string('refrenceID')->nullable();
            $table->string('status')->nullable();
            $table->string('error')->nullable();

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
        Schema::dropIfExists('payreciepts');
    }
}
