<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetricRoleInstance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metric_role_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('metric_role_id')
              ->unsigned();

            $table->foreign('metric_role_id')
            ->references('id')
            ->on('metric_role')
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
        Schema::dropIfExists('metric_role_instances');
    }
}
