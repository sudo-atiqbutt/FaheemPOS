<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('address');
            $table->string('contact');
            $table->integer('status');
            $table->integer('user_id');
            $table->string('attribute_1');
            $table->string('attribute_2');
            $table->string('attribute_3');
            $table->string('attribute_4');
            $table->string('attribute_5');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->integer('is_delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
