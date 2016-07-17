<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('function_user', function (Blueprint $table) {

            $table->integer('function_id')->unsigned();
						$table->integer('user_id')->unsigned();
						 $table->
                foreign('function_id')->references('id')->on('functions')->onDelete('cascade');
								$table->
                foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('function_user');
    }
}
