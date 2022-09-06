<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Equipe;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{

    public function __construct(ClienteRepository $repository)
    {
    }

    public function index(Request $request){
        $clientes = Cliente::all();

        $successMsg = $request->session()->get('msg');

        return view('Clientes.index', ['clientes' => $clientes])->with('successMsg', $successMsg);
    }

    public function create(){
        return view('Clientes.create');
    }

    public function store(Request $request, ClienteRepository $repository){

        $cliente = $repository->add($request);

        return redirect()->route('clientes.index')->with('msg', "Cliente  Criado com sucesso");
    }

    public function destroy(Request $request, ClienteRepository  $repository){

        $repository->destroy($request);
        return redirect()->route('clientes.index')->with('msg', 'Cliente excluído com sucesso');
    }

    public function edit(Cliente $cliente)
    {
        $equipe = $cliente->equipe;
     return view('clientes.edit')->with('cliente', $cliente)->with('equipe', $equipe);
    }

    public function update(Cliente $cliente, Request $request)
    {
        $cliente->fill($request->all());

        $equipeNome = $request->equipe_nome;
        $clienteId = $cliente->id;
        DB::table('equipes')->where('cliente_id', $clienteId)->update(['nome' => $equipeNome]);


        $ativo = $request->ativo;
        if ($ativo == 'on'){
            $ativo = true;
        }
        else{
            $ativo = false;
        }


        DB::table('clientes')->where('id', $cliente->id)->update(['ativo' => $ativo]);
        $cliente->save();



        return redirect()->route('clientes.index')->with('msg', "Cliente '{$cliente->nome}' editado com sucesso!");
    }
}
