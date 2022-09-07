<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Equipe;
use App\Models\Funcionario;
use App\Repositories\EquipesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipesController extends Controller
{
    public function index(Request $request)
    {
        $equipes = Equipe::all();
        $successMsg = $request->session()->get('msg');
        return view('equipes.index', ['equipes' => $equipes])->with('successMsg', $successMsg);
    }

    public function show(Equipe $equipe)
    {
        $funcionarios = $equipe->funcionarios;
        return view('equipes.show', ['equipe' => $equipe])->with('funcionarios', $funcionarios);
    }

    public function edit(Equipe $equipe)
    {
        $funcionarios = Funcionario::all();
        return view('equipes.edit', ['funcionarios' => $funcionarios])->with('equipe', $equipe);
    }

    public function update(Equipe $equipe, Request $request)
    {
        $equipe->fill($request->all());


        $funcs []= [$request->input('funcionarios')];
        foreach ($funcs as $func => $funcionarios) {
            foreach ($funcionarios as $funcionario => $nomes) {
                foreach ($nomes as $names => $nome) {
                    $nome = [
                        'nome' => $nome,
                        'funcao' => $equipe->nome,
                        'equipe_id' => $equipe->id
                    ];

                    Funcionario::create($nome);

                }
            }
        }

        $equipe->save();

        return redirect()->route('equipes.index')->with('msg', "Equipe '{$equipe->nome}' atualizada com sucesso!");
    }

    public function create()
    {
        $funcionarios = Funcionario::all();
        $clientes = Cliente::all();
        $cliente = $clientes[0];
        return view('equipes.create', ['funcionarios' => $funcionarios, 'cliente'=>$cliente]);

    }

    public function store(Request $request, EquipesRepository $repository)
    {
       $equipe = $repository->add($request);
       return redirect()->route('equipes.index')->with('msg', "Equipe '{$equipe->nome}' criada com Sucesso!");
    }

    public function destroy(Request $request, EquipesRepository $repository)
    {
        $repository->destroy($request);
        return redirect()->route('equipes.index')->with('msg', "Equipe excluída com sucesso!");
    }

}
