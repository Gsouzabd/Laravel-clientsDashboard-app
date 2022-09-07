<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

</head>

<body>
<div class="container">
    @auth
    <h1> {{ $title }}</h1>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 5px">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('home')}}">Home </a>
                <a class="nav-item nav-link active" href="{{route('clientes.index')}}">Clientes</a>
                <a class="nav-item nav-link active" href="{{route('equipes.index')}}">Equipes</a>
                <a class="nav-item nav-link active" href="{{route('funcionarios.index')}}">Funcionários</a>
            </div>
        </div>
        <a class="nav-item nav-link active m-3" href="{{route('logout')}}" style="color: white">Sair</a>
    </nav>
    @endauth
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ $slot }}

</div>

</body>
</html>
