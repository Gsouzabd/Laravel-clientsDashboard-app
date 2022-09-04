<?php

namespace App\Repositories;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteRepository
{
    public function add(Request $request): Cliente
    {
        return DB::transaction(function () use ($request){
                $request->validate([
                    'nome' => 'required',
                    'valor' => 'required'
                ]);
                $cliente = Cliente::create($request->all());
                $equipe =  $cliente->equipe()->create([
                    'nome' => $request->equipe_nome
                ]);

                return $cliente;
        });
    }

    public function destroy(Request $request)
    {
        DB::transaction(function () use ($request){
           Cliente::destroy($request->cliente);

        });
    }

}
