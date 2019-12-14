<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PessoaCollection;
use App\Pessoa;

class PessoaController extends Controller
{
    public function store(Request $request){
      $pessoa = new Pessoa([
        'nome' => $request->get('nome');
        'cpf' => $request->get('cpf');
        'nascimento' => $request->get('nascimento');
        'email' => $request->get('email');
        'telefone' => $request->get('telefone');
        'cep' => $request->get('cep');
        'endereco' => $request->get('endereco');
        'bairro' => $request->get('bairro');
        'cidade' => $request->get('cidade');
        'uf' => $request->get('uf');
      ]);
      $pessoa->save();

      return response()->json('sucesso');

    }

    public function index(){
      return new PessoaCollection(Pessoa::all());
    }

    public function edit($id){
      $pessoa = Pessoa::find($id);
      return response()->json($pessoa);
    }

    public function update($id, Request $request){
      $pessoa = Pessoa::find($id);

      $pessoa->update($request->all());

      return response()->json('Atualizado com sucesso :)');
    }

    public function delete($id){
      $pessoa = Pessoa::find($id);

      $pessoa->delete();]

      return response()->json('Deletado com sucesso :)')
    }
}
