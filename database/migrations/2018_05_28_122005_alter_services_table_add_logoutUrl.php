<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterServicesTableAddLogoutUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cas_services', function (Blueprint $table) {
            $table->string('login_url');
            $table->string('logout_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cas_services', function (Blueprint $table) {
            $table->dropColumn('login_url');
            $table->dropColumn('logout_url');
        });
    }
}
