<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('country_origin');
            $table->string('country_destination');
            $table->string('transportation_mode');
            $table->string('kilo_weight');
            $table->string('shipping_total');
            $table->index('country_origin');
            $table->index('country_destination');
            $table->index('transportation_mode');
            $table->index('shipping_total');
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
        Schema::dropIfExists('shippings');
    }
}
