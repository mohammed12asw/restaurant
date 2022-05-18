<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChart3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('itemset1');
            $table->integer('itemset2');
            $table->integer('itemset3');
            $table->integer('supcount');
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
        Schema::dropIfExists('chart3s');
    }
}
