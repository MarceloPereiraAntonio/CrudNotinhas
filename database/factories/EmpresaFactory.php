<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EmpresaModel;
use Faker\Generator as Faker;

$factory->define(EmpresaModel::class, function (Faker $faker) {
    return [
        'cnpj' => $faker->unique()->ean13,
        'ie' => $faker->unique()->numberBetween,
        'im' => $faker->unique()->numberBetween,
        'razaoSocial' => $faker->company,
        'nomeFantasia' =>$faker->company,
        'optanteSn' => 'true',
        'incentivadorCultural' => 'false',
        'email' => $faker->unique()->email,
        'cep' => $faker->postcode,
        'rua' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'complemento' => $faker->name,
        'bairro' => $faker->streetAddress,
        'cidade' => $faker->city,
        'estado' => $faker->stateAbbr,
        'codIbge' => $faker->postcode,
        'regimeEspecial' => $faker->randomDigit,
        'regimeT' => $faker->randomDigit,
        'regimeTe' => $faker->randomDigit,
        'codServicoMunicipal' => $faker->randomFloat,
        'descricaoServico' => $faker->realText,
        'aliquotaIss' => $faker->randomDigit,
        'numSerieNfs' => $faker->randomDigit,
        'rps' => $faker->numberBetween,
        'proxNumNf' => $faker->randomNumber,
        'proxNumDanf' => $faker->randomNumber,
        'numSerie' => $faker->randomDigit,
        'cnae' => $faker->numberBetween,
        'servicoLc116' => $faker->randomFloat,
        'beneficioFiscal' => 'false',
        'tipoEmissao' => '1',
        'frequenciaRelatorio' => 'mensal',
        'emailsRelatorio' => $faker->unique()->email,
        'ambiente' => 1,
        'idEnotas' => $faker->unique()->md5,
        'retornoEnotas' => 'nenhum',
        'status' => '1',
        'garantia' => $faker->randomDigit,
        'enviaNota' => 'true',
        'volumeEmissao' => 'b',
        'clienteMjp' => 'false',
        'validadeCertificado' => $faker->date,
        'plataformaEmissao' => 'E'
    ];
});
