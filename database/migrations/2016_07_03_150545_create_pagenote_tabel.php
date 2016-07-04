<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagenoteTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_note', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('note_id')->unsigned;
            $table->timestamps();
            $table->foreign('page_id')
      ->references('id')->on('pages')
      ->onDelete('cascade');
           $table->foreign('note_id')
      ->references('id')->on('notes')
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
        Schema::drop('page_note');
    }
}
