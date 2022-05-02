<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('ano')->nullable();
            $table->string('km')->nullable();
            $table->string('cor')->nullable();
            $table->string('cambio')->nullable();
            $table->string('potencia')->nullable();
            $table->string('portas')->nullable();
            $table->string('combustivel')->nullable();
            $table->string('status')->nullable();
            $table->string('preco')->nullable();
            $table->string('video')->nullable();
            $table->text('info')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
