<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financimentos', function (Blueprint $table) {
            $table->id();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('ano')->nullable();
            $table->string('km')->nullable();
            $table->string('cor')->nullable();
            $table->text('opcionais')->nullable();
            $table->string('valor_financiamento')->nullable();
            $table->string('entrada_financiamento')->nullable();
            $table->string('parcela_financiamento')->nullable();
            $table->string('regime')->nullable();
            $table->string('cargo')->nullable();
            $table->string('renda')->nullable();
            $table->string('tempo_emprego')->nullable();
            $table->string('banco')->nullable();
            $table->string('agencia')->nullable();
            $table->string('tempo_conta')->nullable();
            $table->string('conta')->nullable();
            $table->string('nome')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('data_rg')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('cnh')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('mensagem')->nullable();
            $table->string('nome_1')->nullable();
            $table->string('celular_1')->nullable();
            $table->string('nome_2')->nullable();
            $table->string('celular_2')->nullable();
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
        Schema::dropIfExists('financimentos');
    }
}
