<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEuromillionsDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('euromillions_draws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lottery_id')->nullable();
            $table->date('draw_date')->nullable()->unique();
            $table->integer('result_regular_number_one')->nullable();
            $table->integer('result_regular_number_two')->nullable();
            $table->integer('result_regular_number_three')->nullable();
            $table->integer('result_regular_number_four')->nullable();
            $table->integer('result_regular_number_five')->nullable();
            $table->integer('result_lucky_number_one')->nullable();
            $table->integer('result_lucky_number_two')->nullable();
            $table->bigInteger('jackpot_amount')->nullable();
            $table->string('jackpot_currency_name',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('euromillions_draws');
    }
}
