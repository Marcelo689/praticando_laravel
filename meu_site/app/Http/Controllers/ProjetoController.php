<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\Linguagens;
class ProjetoController extends Controller
{
    public function index(Request $request){
        $projetos = Projeto::paginate(10);
        $linguagens = Linguagens::all();
        return view('site.index',['projetos'=>$projetos,'linguagens'=>$linguagens]);
    }
    public function create(Request $request){
        $msg = '';
        $linguagens = Linguagens::all();
        if($request->input('_token') != ''){
            $regras =[
                'nome'=>'required',
                'descricao'=>'required',
                'link'=>'required',
            ];
            $feedback = [
                'required'=> 'O campo :attribute é requerido',
            ];
            $request->validate($regras,$feedback);
            Projeto::create($request->all());
            $msg = 'Registro inserido com sucesso';
            return redirect()->route('site.index',['msg'=>$msg]);
        }
        return view('site.create',['linguagens'=>$linguagens]);

    }
    public function edit(Request $request,$id){
        if(($request->input('id') != null)){
            $projeto = Projeto::find($request->input('id'));
            //editando
            $projeto->update($request->all());
            return redirect()->route('site.index');
        }else{
        $projeto = Projeto::find($id);
        $linguagens = Linguagens::all();
        // pegandos os dados para editar
        return view('site.edit',['projeto'=> $projeto,'linguagens'=>$linguagens]);
        }

    }

    public function excluir($id){
        $projeto = Projeto::find($id)->delete();

        return redirect()->route('site.index');
    }
}
