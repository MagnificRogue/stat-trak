<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')
              ->unsigned()
              ->nullable();
            
            $table->integer('role_id')
              ->unsigned()
              ->nullable();

            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onUpdate('cascade');

            $table->foreign('role_id')
              ->references('id')->on('roles')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
