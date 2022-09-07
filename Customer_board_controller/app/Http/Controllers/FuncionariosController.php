<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Equipe;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Composer\Autoload\includeFile;

class FuncionariosController extends Controller
{
    public function index()
    {
        $successMsg = session()->get('msg');
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios])->with('successMsg', $successMsg);
    }

    public function edit(Funcionario $funcionario)
    {
        $equipes = Equipe::all();
        return view('funcionarios.edit', ['equipes' => $equipes])->with('funcionario',$funcionario);
    }

    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->fill($request->all());


       $funcionario->save();

        return redirect()->route('funcionarios.index')
            ->with('msg', "Funcionário '{$funcionario->nome}' editado com sucesso!");
    }

    public function create()
    {
        $equipes = Equipe::all();
        $cliente = Cliente::all();
        return view('funcionarios.create', ['equipes'=> $equipes, 'cliente' => $cliente[2]]);
    }

    public function store(Request $request)
    {
        $funcionario = $request->all();
        Funcionario::create($funcionario);

        return redirect()->route('funcionarios.index')
            ->with('msg', "Funcionário '{$funcionario->nome}' criado com sucesso!");
    }

    public function destroy(Request $request)
    {
        Funcionario::destroy($request->funcionario);
        return redirect()->route('funcionarios.index')->with('msg', "Funcionário excluído!");
    }
}


