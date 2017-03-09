<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grievances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nation_id')->unsigned()->nullable();
            $table->integer('target_nation_id')->unsigned()->nullable();
            $table->datetime('due_date');
            $table->float('money_required');
        });

        Schema::table('grievances', function($table) {
            $table->foreign('nation_id')
            ->references('id')
            ->on('nations')
            ->onDelete('cascade');

            $table->foreign('target_nation_id')
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
        Schema::drop('grievances');
    }
}
