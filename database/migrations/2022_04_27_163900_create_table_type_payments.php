<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTypePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('payments')) {
            Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->string('amount')->nullable(false);
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('type_id');
                $table->unsignedBigInteger('history_id');
                $table->unsignedBigInteger('type_payments_id');
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('type_id')->references('id')->on('types');
                $table->foreign('history_id')->references('id')->on('histories');
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
        Schema::dropIfExists('payments');
    }
}
