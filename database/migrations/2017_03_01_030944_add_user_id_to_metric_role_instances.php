<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToMetricRoleInstances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metric_role_instances', function (Blueprint $table) {
            $table->integer("user_id");
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metric_role_instances', function (Blueprint $table) {
            $table->dropColumn("user_id");
            //
        });
    }
}
