<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('entidad', 4);
            $table->char('oficina', 4);
            $table->char('dc', 2);
            $table->char('cuenta', 10);
            $table->unique(['entidad', 'oficina', 'dc', 'cuenta']);
            $table->char('programa', 3);
            $table->tinyInteger('extracto', 4);
            $table->tinyInteger('renuncia', 4);
            $table->decimal('saldo', 5, 0);
            $table->date('fechaextracto', 60)->nullable();
            $table->timestamps();
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
};
