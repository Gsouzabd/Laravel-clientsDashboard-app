<?php

namespace App\Http\Controllers;

use App\Mail\cliente_created;
use App\Mail\cliente_deleted;
use App\Mail\cliente_updated;
use App\Models\Cliente;
use App\Models\Equipe;
use App\Models\User;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ClientesController extends Controller
{

    public function __construct(ClienteRepository $repository)
    {
    }

    public function index(Request $request){
        $clientes = Cliente::paginate(5);

        $successMsg = $request->session()->get('msg');

        return view('Clientes.index', ['clientes' => $clientes])->with('successMsg', $successMsg);
    }

    public function create(){
        return view('Clientes.create');
    }

    public function store(Request $request, ClienteRepository $repository){

        $logopath = $request->hasFile('logo')
            ? $request->file('logo')->store('clientes_logo', 'public')
            : null;

        $request->logopath = $logopath;

        $cliente = $repository->add($request);

        $users = User::all();
        foreach ($users as $user){
            $email = new cliente_created($cliente->nome, $cliente->id);
            Mail::to($user)->queue($email);
        }

        return redirect()->route('clientes.index')->with('msg', "Cliente  Criado com sucesso");
    }

    public function destroy(Request $request, ClienteRepository  $repository){

        $cliente = $repository->destroy($request);

        $email = new cliente_deleted();
        Mail::to($request->user())->send($email);

        return redirect()->route('clientes.index')->with('msg', 'Cliente excluído com sucesso');
    }

    public function edit(Cliente $cliente)
    {
        $equipe = $cliente->equipe;
     return view('clientes.edit')->with('cliente', $cliente)->with('equipe', $equipe);
    }

    public function update(Request $request, Cliente $cliente)
    {

        $cliente->fill($request->all());

        $equipeNome = $request->equipe_nome;
        $clienteId = $cliente->id;

        DB::table('equipes')->where('cliente_id', $clienteId)->update(['nome' => $equipeNome]);

        $cliente->save();

        $users = User::all();
        foreach ($users as $user){
            $email = new cliente_updated($cliente->nome, $cliente->id);
            Mail::to($user)->queue($email);
        }

        return redirect()->route('clientes.index')->with('msg', "Cliente '{$cliente->nome}' editado com sucesso!");
    }
}
