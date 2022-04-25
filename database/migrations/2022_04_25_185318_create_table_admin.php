<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('admins')){
            Schema::create('admins', function (Blueprint $table) {
                $table->id();
                $table->string('email')->unique()->nullable(false);
                $table->string('name')->comment('nombre del administrador');
                $table->string('password');

                $table->timestamps();
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
        Schema::dropIfExists('table_admin');
    }
}
