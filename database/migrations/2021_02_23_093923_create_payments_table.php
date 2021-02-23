<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('trans_id');
            $table->string('ref_code');
            $table->string('amount');
            $table->string('date');
            $table->string('currency');
            $table->string('channel');
            $table->string('auth_code');
            $table->string('card_type');
            $table->string('bank');
            $table->string('card_brand');
            $table->string('cus_id');
            $table->string('email');
            $table->string('customer_code');
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
        Schema::dropIfExists('payments');
    }
}
