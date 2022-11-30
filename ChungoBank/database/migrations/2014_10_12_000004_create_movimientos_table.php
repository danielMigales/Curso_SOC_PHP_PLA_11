<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->char('operacion', 1);
            $table->char('concepto', 200);
            $table->decimal('puntos', 5, 0);
            $table->decimal('saldomov', 5, 0);
            $table->char('tarjeta', 16);
            $table->char('localizador', 8)->nullable();
            $table->char('comercio', 80)->nullable();
            $table->char('comentarios', 255)->nullable();
            $table->timestamps();
            $table->integer('cuenta_id')->unsigned();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
