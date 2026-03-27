<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alergias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('grado');
            $table->text('alergias')->nullable();
            $table->text('intolerancias')->nullable();
            $table->text('preferencias')->nullable();
            $table->string('contacto_emergencia');
            $table->string('telefono_emergencia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alergias');
    }
};