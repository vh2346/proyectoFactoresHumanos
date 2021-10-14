<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('identificacion');
            $table->string('edad');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('especialidad');
            $table->string('horario')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
