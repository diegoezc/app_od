<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('type_payments')) {
            Schema::create('type_payments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pay_id');
                $table->unsignedBigInteger('type_id');
                $table->timestamps();
                $table->foreign('pay_id')->references('id')->on('payments');
                $table->foreign('type_id')->references('id')->on('types');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_payments');
    }
}
