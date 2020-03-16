<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('file');
        Schema::create('file', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->text('name');
            $table->string('image_link',255);
            $table->unsignedBigInteger('services_id')->unsigned();
            $table->foreign('services_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
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
        Schema::dropIfExists('file');
    }
}
