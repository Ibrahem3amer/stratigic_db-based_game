<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNationTechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('nation_tech', function($table) {
            $table->foreign('nation_id')
                ->references('id')
                ->on('nations'); 

            $table->foreign('tech_id')
                ->references('id')
                ->on('technologies'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
