<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Produto;
use Illuminate\Http\Request;
class ProdutoController extends Controller{

    public function index(){
        return Produto::all();
    }
    public function store(Request $req){

        $req->validate($this->validation());

        $produto = $req->all();
        Produto::create($produto);

        return ['msg'=>'produto criada com sucesso'];
    }
    public function single($id){

  
        $produto = Produto::find($id);
        if(!$produto){
            return response()->json( ['msg'=>'produto não encontrado!'], 404);
        }
        return ['data'=>$produto];
    }   
    public function update(Request $req,$id){
    
        $produto = Produto::find($id);
        $produto->update($req->all());
        $produto->save();
        return ['msg'=>'produto atualizado com sucesso'];
    }
    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return ['msg'=>'Item deletado com sucesso'];
    }

    public function validation(){
        return [
            'nome'      =>'required|min:6',
            'preco'     =>'required',
            'descricao' => 'required|min:6'
        ];
    }
}