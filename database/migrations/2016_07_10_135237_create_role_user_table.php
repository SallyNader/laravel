<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table)
        {
            $table->increments('id'); $table->integer('user_id')->unsigned(); $table->
                integer('role_id')->unsigned(); $table->timestamps(); $table->foreign('role_id')->
                references('id')->on('roles')->onDelete('cascade'); $table->foreign('user_id')->
                references('id')->on('users')->onDelete('cascade'); }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_user');
    }
}
