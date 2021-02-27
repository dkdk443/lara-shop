<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('zip_code');
            $table->string('pre');
            $table->string('city');
            $table->string('address');
            $table->string('building');
            $table->string('tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('zip_code');
            $table->dropColumn('pre');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('building');
            $table->dropColumn('tel');
        });
    }
}
