<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->binary('avatar')->nullable();
            $table->string('phone');
            $table->string('sex');
            $table->boolean('is_mail_allowed');
            $table->integer('experience')->nullable();
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
            $table->dropColumn(['nickname', 'firstname', 'lastname', 'avatar', 'phone', 'sex', 'is_mail_allowed', 'experience']);
        });
    }
}
