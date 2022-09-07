<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use function Composer\Autoload\includeFile;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    public function edit(Funcionario $funcionario)
    {
        $equipes = Equipe::all();
        return view('funcionarios.edit', ['equipes' => $equipes])->with('funcionario',$funcionario);
    }

    public function update(Request $request, Equipe $equipe)
    {
        $equipes = $request->equipes;

        $funcionario = $request->all([
            'nome' => $request->nome,
            'funcao' => $request->funcao,
            'equipe_id' => $equipes
        ]);

        Funcionario::save($funcionario);
    }

    public function create()
    {
        $equipes = Equipe::all();
        return view('funcionarios.create', ['equipes'=> $equipes]);
    }
}


