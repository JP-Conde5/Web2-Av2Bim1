<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagem;

class controllerViagem extends Controller
{    
    public function index(){
        $dados = Viagem::all();
        return view('exibirLocais', compact('dados'));
    }

    public function create(){
        return view('novoLocal');
    }

    public function store(Request $request){
        $novo = new Viagem();
        $novo->local = $request->input('local');
        $novo->data = $request->input('data');
        $novo->save();
        return redirect('/exibirLocais')->with('sucess', 'gravado com sucesso');
    }

    public function edit(string $id){
        $dados = Viagem::find($id);
        return view('editarLocal', compact('dados'));
    }

    public function update(string $id, Request $request){
        $dados = Viagem::find($id);
        if(isset($dados)){
            $dados->local = $request->input('local');
            $dados->data = $request->input('data');
            $dados->save();
            return redirect('/exibirLocais')->with('sucess', 'atualizado com sucesso');
        }
        return redirect('/exibirLocais')->with('danger', 'erro ao atualizar');
    }

    public function destroy(string $id){
        $dados = Viagem::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/exibirLocais')->with('sucess', 'deletado com sucesso');
        }
        return redirect('/exibirLocais')->with('danger', 'erro ao deletar');
    }
}
