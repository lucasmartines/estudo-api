<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller{

    public function index(){
        return Categoria::all();
    }
    public function store(Request $req){
        $categoria = $req->all();
        Categoria::create($categoria);

        return ['msg'=>'Categoria criada com sucesso'];
    }
    public function single($id){
        $categoria = Categoria::find($id)->first();

        return ['data'=>$categoria];
    }   
    public function update(Request $req,$id){
    
        $categoria = Categoria::find($id);
        $categoria->update($req->all());
        $categoria->save();
        return ['msg'=>'Categoria atualizado com sucesso'];
    }
    public function destroy($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
        return ['msg'=>'Item deletado com sucesso'];
    }
}