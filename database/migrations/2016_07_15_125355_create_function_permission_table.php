<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('function_permission', function (Blueprint $table) {
             $table->integer('function_id')->unsigned();
						  $table->integer('permission_id')->unsigned();
							$table->
                foreign('function_id')->references('id')->on('functions')->onDelete('cascade'); $table->
                foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
                $table->primary('function_id', 'permission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('function_permission');
    }
}
