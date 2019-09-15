<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('contact');
            $table->text('gender');
            $table->text('image')->nullable();
            $table->text('remarks');
            $table->integer('usertype_id');
            $table->integer('userstates_id');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->string('attribute_1');
            $table->string('attribute_2');
            $table->string('attribute_3');
            $table->string('attribute_4');
            $table->string('attribute_5');


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
