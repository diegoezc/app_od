<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRolAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        if (!Schema::hasTable('role_admins')) {
            Schema::create('role_admins', function (Blueprint $table) {
                $table->id();
                $table->integer("role_id")->unsigned()->nullable();
                $table->integer("admin_id")->unsigned()->nullable();


                $table->timestamps();
                $table->foreign('role_id')->references('id')->on('roles');
                $table->foreign('admin_id')->references('id')->on('admins');
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
        Schema::dropIfExists('role_admins');
    }
}
