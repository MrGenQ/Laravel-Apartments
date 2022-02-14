<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->smallInteger('floor');
            $table->smallInteger('bedrooms');
            $table->smallInteger('car_spaces');
            $table->smallInteger('living_spaces')->nullable();
            $table->smallInteger('bathrooms')->nullable();
            $table->bigInteger('area');
            $table->float('price', 18, 2);
            $table->string('status');
            $table->dateTime('date_sell_from')->nullable();
            $table->dateTime('date_sell_to')->nullable();
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
        Schema::dropIfExists('apartments');
    }
}
