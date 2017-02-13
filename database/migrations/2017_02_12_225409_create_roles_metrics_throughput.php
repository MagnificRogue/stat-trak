<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesMetricsThroughput extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metric_role', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('role_id')
            ->unsigned()
            ->nullable();
          
            $table->integer('metric_id')
            ->unsigned()
            ->nullable();

            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');

            $table->foreign('metric_id')
            ->references('id')
            ->on('metrics')
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
        Schema::dropIfExists('metric_role');
    }
}
