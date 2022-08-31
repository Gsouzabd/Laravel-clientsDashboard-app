<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(Request $request){
        $clientes = Cliente::all();
        $equipes = Equipe::all();

        $successMsg = $request->session()->get('msg');

        return view('Clientes.index', ['clientes' => $clientes, 'equipes'=> $equipes])->with('successMsg', $successMsg);
    }

    public function create(){
        return view('Clientes.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'valor'=> 'required',
            'plataforma'=> 'required',
            'modelo'=> 'required',
            'status'=> 'required'
        ]);

        $cliente = Cliente::create($request->all());
        $equipe = $cliente->equipe()->create([
            'nome' => $request->equipe_nome
        ]);

        return redirect()->route('clientes.index')->with('msg', "Cliente '{$cliente->nome}' Criado com sucesso");
    }

    public function destroy(Request $request){

        Cliente::destroy($request->cliente);
        return redirect()->route('clientes.index')->with('msg', 'Cliente excluído com sucesso');
    }

    public function edit(Cliente $cliente)
    {
     return view('clientes.edit')->with('cliente', $cliente);
    }

    public function update(Cliente $cliente, Request $request)
    {
        $cliente->fill($request->all());
        $cliente->save();

        return redirect()->route('clientes.index')->with('msg', "Cliente '{$cliente->nome}' editado com sucesso!");
    }
}
