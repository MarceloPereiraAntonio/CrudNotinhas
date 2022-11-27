<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmpresaModel extends Model
{
        protected $fillable = [

            'cnpj', 
            'ie', 
            'im',
            'razaoSocial', 
            'nomeFantasia', 
            'optanteSn',
            'incentivadorCultural', 
            'email',
            'cep',
            'rua' ,
            'numero',  
            'complemento',  
            'bairro',
            'cidade',
            'estado',
            'codIbge',
            'regimeEspecial', 
            'regimeT',
            'regimeTe', 
            'codServicoMunicipal',  
            'descricaoServico',  
            'aliquotaIss',  
            'numSerieNfs',  
            'rps',
            'proxNumNf',  
            'proxNumDanf',  
            'numSerie',  
            'cnae', 
            'servicoLc116', 
            'beneficioFiscal', 
            'tipoEmissao',
            'frequenciaRelatorio', 
            'emailsRelatorio' ,
            'ambiente',  
            'idEnotas' , 
            'retornoEnotas',  
            'status',  
            'garantia',  
            'enviaNota',  
            'volumeEmissao',
            'clienteMjp',  
            'validadeCertificado',  
            'created_at',  
            'updated_at',
            'plataformaEmissao',
        ];
    



    public function listEmpresa()
    {
        $empresas = DB::table('empresa_models')
            ->select("*")
            ->groupBy('id')
            ->orderBy('id', 'ASC')
            ->get();
        return ($empresas);
    }
    // public function simNao(){
    //     $enviaNota = DB::table('empresa_models')
    //     ->select("enviaNota")
    //     ->get();

    //     return json_encode($enviaNota);
    // }
}
