<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{

    public function __construct(ClienteRepository $repository)
    {
    }

    public function index(Request $request)
    {
        if (!$request->has('nome')) {
            return Cliente::all();
        }
        return Cliente::whereNome($request->nome)->get();
    }

    public function store(Request $request,ClienteRepository $repository)
    {
        Return response()->json($repository->add($request), 201);
    }

    public function show(Cliente $cliente)
    {
        $clienteModel = Cliente::find($cliente);


        if ($clienteModel === null){
            return response()->json(['message' => 'cliente not found'], 404);
        }
        return $clienteModel;
    }

    public function update(Cliente $cliente, Request $request)
    {

        $cliente->fill($request->all());
        $cliente->save();

        return $cliente;

    }

    public function destroy(Cliente $cliente)
    {
        Cliente::destroy($cliente);

        return response()->noContent();
    }
}
