<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ref')->nullable();
            $table->string('dp');
            $table->string('verified');
            $table->string('status');
            $table->time('joinedT');
            $table->date('joinedD');
            $table->string('token');
            $table->string('reset');
            $table->string('account_type');
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('about')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('skills')->nullable();
            $table->string('interests')->nullable();
            $table->string('facebook');
            $table->string('linkedIn');
            $table->string('twitter');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
