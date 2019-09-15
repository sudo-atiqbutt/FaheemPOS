<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('contact')->nullable();
            $table->integer('status');
            $table->integer('user_id');
            $table->string('attribute_1')->nullable();
            $table->string('attribute_2')->nullable();
            $table->string('attribute_3')->nullable();
            $table->string('attribute_4')->nullable();
            $table->string('attribute_5')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
