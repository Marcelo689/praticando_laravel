<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome','descricao','link','liguagem_id'];

    public function linguagem(){
        return $this->hasOne('App\Linguagem','liguagem_id','id');
    }
}
