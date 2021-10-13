<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('identificacion')->nullable();
            $table->string('email')->nullable();
            $table->string('fecha')->nullable();
            $table->string('doctor')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('horario')->nullable();
            $table->string('telefono')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('estado')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
