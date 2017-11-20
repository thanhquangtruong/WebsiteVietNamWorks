<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('role')->default('0');
            $table->string('capbac')->nullable();
            $table->string('chucdanh')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('dienthoai')->nullable();
            $table->string('honnhan')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('quocgia')->nullable();
            $table->string('thanhpho')->nullable();
            $table->string('quan')->nullable();
            $table->string('diachi')->nullable();
            $table->string('avatar')->nullable();
            $table->string('kynang')->nullable();
            $table->text('thongtinchung')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
