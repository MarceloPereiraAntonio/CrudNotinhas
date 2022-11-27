<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProduto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   public function index(){
   
    return view('home');
   }
   public function show($id){

    return("Exibindo produto $id");
   }
   public function edit($id){
      return view('produtos.edit', [
         'id' => $id
      ]);
   
   }
   public function update(Request $request){
      dd($request->all());
   }
   public function create(){
      return view('produtos.create');
   }
   public function store(StoreUpdateProduto $request){
       dd($request->all());

   }
   public function destroy($id){

   }
}
