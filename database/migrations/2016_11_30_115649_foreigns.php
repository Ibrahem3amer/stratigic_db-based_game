<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nation', function(Blueprint $table){
            $table->foreign('ruler_id')
               ->references('id')
               ->on('users')
               ->onDelete('cascade');
        });

        Schema::table('nation', function(Blueprint $table){
            $table->foreign('land_id')
               ->references('id')
               ->on('lands')
               ->onDelete('cascade');
        });

        Schema::table('nation_time_tracking', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_population', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_millitary', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_financial', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_resources', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_constructions', function(Blueprint $table){
            $table->foreign('nation_id')
               ->references('id')
               ->on('nation')
               ->onDelete('cascade');
        });

        Schema::table('nation_constructions', function(Blueprint $table){
            $table->foreign('building_id')
               ->references('id')
               ->on('buildings')
               ->onDelete('cascade');
        });

        Schema::table('lands', function(Blueprint $table){
            $table->foreign('building_id')
               ->references('id')
               ->on('buildings')
               ->onDelete('cascade');
        });

        Schema::table('nation_stats', function(Blueprint $table){
            $table->foreign('building_id')
               ->references('id')
               ->on('buildings')
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
        //
    }
}
