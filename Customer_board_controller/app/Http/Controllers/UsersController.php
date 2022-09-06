<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = $request->except(['_token']);
        $user['password'] = Hash::make($user['password']);

        $userCreated = User::create($user);

        Auth::login($userCreated);
        session()->start();
        $_SESSION['logado'];
        return redirect()->route('home')->with('loginMsg', "Cadastro realizado com sucesso. Bem-vindo(a)!");
    }
}
