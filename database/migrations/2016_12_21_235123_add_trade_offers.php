<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTradeOffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nation_trade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nation_id')->nullable()->unsigned();
            $table->integer('targeted_nation_id')->nullable()->unsigned();
            $table->string('offer')->nullable();
            $table->string('request')->nullable();
            $table->boolean('counter');
        });

        Schema::table('nation_trade', function($table) {
            $table->foreign('nation_id')
            ->references('id')
            ->on('nations')
            ->onDelete('cascade');

            $table->foreign('targeted_nation_id')
            ->references('id')
            ->on('nations')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nation_trade');
    }
}
