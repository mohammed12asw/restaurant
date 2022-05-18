<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diets', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('minkal');
            $table->bigInteger('maxkal');
            $table->bigInteger('mincarbs');
            $table->bigInteger('maxcarbs');
            $table->bigInteger('minfat');
            $table->bigInteger('maxfat');
            $table->bigInteger('minfiber');
            $table->bigInteger('maxfiber');
            $table->bigInteger('minprocount');
            $table->bigInteger('maxprocount');
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
        Schema::dropIfExists('diets');
    }
}
