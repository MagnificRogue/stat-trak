<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesCanHaveManyUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('company_id')
              ->unsigned()
              ->nullable();

            $table->integer('user_id')
              ->unsigned()
              ->nullable();

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')
              ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_users');
    }
}
