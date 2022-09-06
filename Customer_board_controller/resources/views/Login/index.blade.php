<x-layout title="Login">

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">

                            <form action="{{route('signin')}}" method="post">
                                @csrf


                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right mb-2">E-mail</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 mt-2" >
                                <button type="submit" class="btn btn-dark">Login</button>
                                </div>

                        </form>
                        <div class="col-md-6 offset-md-4 mt-2" >
                            <p>Não possui conta?</p>
                            <a href="{{route('users.create')}}" ><button class="btn btn-primary">
                                Cadastre-se
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>


</x-layout>
