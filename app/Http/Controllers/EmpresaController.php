<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRequestEmpresa;
use App\Models\EmpresaModel;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {

        $empresas = EmpresaModel::paginate();
        //var_dump($empresas[10]->enviaNota); die();


        return view('empresa.empresas', [
            'empresas' => $empresas
        ]);
    }
    public function show($id)
    {
        $empresa = EmpresaModel::find($id);


        return view('empresa.modal.edit', [
            'empresa' => $empresa
        ]);
    }

    public function create(){
    
        return view('empresa.modal.addEmpresa',[
        ]);
    }

    public function store(StoreUpdateRequestEmpresa $request){
        $data = $request->all();

        EmpresaModel::create($data); 

        return redirect()->route('empresa.index');
        
    }

    public function update(StoreUpdateRequestEmpresa $request, $id){
        
        return('');
    }
}
