<?php

namespace App\Repositories;

use App\Models\Equipe;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipesRepository
{
    public function add(Request $request): Equipe
    {
      return DB::transaction(function () use ($request){
            $equipe = Equipe::create([
                'cliente_id' => $request->cliente_id,
                'nome' => $request->equipe_nome
            ]);

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
          return $equipe;
      });
    }

    public function destroy(Request $request)
    {
        DB::transaction(function () use ($request){
           Equipe::destroy($request->equipe);
        });
    }
}
