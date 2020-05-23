<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema:: table ('main',function (Blueprint $table){
            $table->text('content')->change();
            $table->integer('image_id')->nullable();
            $table->foreign('image_id')->references('id')->on('file');
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
