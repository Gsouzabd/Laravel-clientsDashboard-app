<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('Clientes.index', ['clientes' => $clientes]);
    }

    public function create(){
        return view('Clientes.create');
    }

    public function store(Request $request){
        Cliente::create($request->all());
        return redirect()->route('Clientes.index');
    }
}
