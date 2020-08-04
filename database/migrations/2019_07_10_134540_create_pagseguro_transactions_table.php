<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagseguroTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagseguro_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('reference');
            $table->integer('status');
            $table->integer('installmentCount'); // quantidade de parcelas
            $table->string('product_desc');
            $table->string('totalAmount');

            $table->string('name');
            $table->string('email');
            $table->string('areaCode');
            $table->string('phone');
            $table->longText('day_user_product')->nullable();
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
        Schema::dropIfExists('pagseguro_transactions');
    }
}
