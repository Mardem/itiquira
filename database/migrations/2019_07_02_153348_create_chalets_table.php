<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chalets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('rooms');
            $table->longText('description');
            $table->float('val_adult'); // valor para adulto
            $table->float('val_child_10'); // valor para crianças > 10
            $table->float('val_child_9'); // valor para crianças 6 a 9
            $table->integer('limit_adult');
            $table->integer('limit_children');
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
        Schema::dropIfExists('chalets');
    }
}
