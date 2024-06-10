<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono')->nullable();
            $table->string('calles')->nullable();
            $table->string('sepomex_id');
            $table->string('num_int')->nullable();
            $table->string('num_ext')->nullable();
            $table->text('referencias')->nullable();
            $table->string('logo')->nullable();
            $table->string('web')->nullable();            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
