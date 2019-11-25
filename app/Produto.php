<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['nome','preco','descricao'];

    public function categoria(){
        $this->belongsToMany('App\Categoria');
    }
}
