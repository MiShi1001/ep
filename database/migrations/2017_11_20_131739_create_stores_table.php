<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->unique();
            $table->unsignedInteger('mem_id');
            $table->unsignedInteger('manager_id');
            $table->string('user_id',20);
            $table->string('store',50);
            $table->text('introduction',500);
            $table->string('location',100);
            $table->string('type',10);
            $table->float('score_avg');
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
        Schema::dropIfExists('stores');
    }
}
