<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nation', function(Blueprint $table){
            $table->increments('id');
            $table->integer('ruler_id')->nullable()->default('1');    //foreign_key --> user_id
            $table->string('state_name');
            $table->string('nation_religion');
            $table->string('nation_summary');
            $table->string('nation_slogan');
            $table->string('nation_flag');
            $table->integer('land_id')->nullable();    //foreign_key --> land_id
            $table->integer('tax_rate');
            $table->integer('war_prefrence');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nation');
    }
}
