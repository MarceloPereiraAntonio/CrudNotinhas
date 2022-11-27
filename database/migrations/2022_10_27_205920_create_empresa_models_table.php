<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cnpj', 100);
            $table->string('ie', 100);
            $table->string('im', 100);
            $table->string('razaoSocial', 255);
            $table->string('nomeFantasia', 255);
            $table->string('optanteSn', 100);
            $table->string('incentivadorCultural', 100);
            $table->string('email', 255);
            $table->string('cep', 255);
            $table->string('rua', 255);
            $table->string('numero', 255);
            $table->string('complemento', 255)->nullable();
            $table->string('bairro', 255);
            $table->string('cidade', 255);
            $table->string('estado', 155);
            $table->string('codIbge', 255);
            $table->string('regimeEspecial', 155);
            $table->string('regimeT', 155)->nullable();
            $table->string('regimeTe', 155)->nullable();
            $table->string('codServicoMunicipal', 155);
            $table->string('descricaoServico', 255);
            $table->string('aliquotaIss', 255);
            $table->string('numSerieNfs', 255);
            $table->string('rps', 255);
            $table->integer('proxNumNf');
            $table->integer('proxNumDanf');
            $table->integer('numSerie');
            $table->string('cnae', 255);
            $table->string('servicoLc116', 255);
            $table->string('beneficioFiscal', 255)->nullable();
            $table->integer('tipoEmissao');
            $table->string('frequenciaRelatorio', 155);
            $table->string('emailsRelatorio', 255)->nullable();
            $table->integer('ambiente');
            $table->string('idEnotas', 255);
            $table->string('retornoEnotas', 255);
            $table->integer('status');
            $table->integer('garantia');
            $table->string('enviaNota', 155);
            $table->string('volumeEmissao', 255);
            $table->string('clienteMjp', 255);
            $table->string('validadeCertificado', 255);
            $table->timestamps();
            $table->string('plataformaEmissao', 255);
            
           

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_models');
    }
}
