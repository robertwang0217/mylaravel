<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create property_analytics table
        Schema::create('property_analytics', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('property_id');
            $table->integer('analytic_type_id');
            $table->text('value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_analytics');
    }
}
