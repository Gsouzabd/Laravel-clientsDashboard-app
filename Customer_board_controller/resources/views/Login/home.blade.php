<x-layout title="">

    @isset($loginMsg)
        <div class="alert alert-success">
            <?=$loginMsg?>
        </div>
    @endisset
        <body>



        <main role="main">

            <section class="jumbotron text-center">
                <div class="container mt-3">
                    <h1 class="jumbotron-heading">Laravel Application</h1>
                    <p class="lead text-muted">This is a simple laravel application made by Gabriel Souza B. Doudement
                        <a href="https://www.linkedin.com/in/gabrielsouzabd/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg></a></br>for the purpose of practicing and learning</p>

                </div>
            </section>

            <div class="card text-center">
                <div class="card-header">
                    Rota 1
                </div>
                <div class="card-body">
                    <h3 class="card-title">Clientes</h3>
                    <p class="card-text">Confira dados dos clientes e informações de projetos</p>
                    <a href="{{route('clientes.index')}}" class="btn btn-primary">Conferir</a>
                </div>
                <div class="card-footer text-muted">
                   Última atualização: Há 2 dias
                </div>
            </div>
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Equipes</h3>
                                <p class="card-text">Confira nossas equipes e seus funcionários</p>
                                <a href="{{route('equipes.index')}}" class="btn btn-primary">Conferir</a>
                            </div>
                            <div class="card-footer text-muted">
                                Última atualização: Há 1 semana
                            </div>
                        </div>
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h3 class="card-title">Funcionários</h3>
                    <p class="card-text">Confira nossos funcionários e suas funções</p>
                    <a href="{{route('funcionarios.index')}}" class="btn btn-primary">Conferir</a>
                </div>
                <div class="card-footer text-muted">
                    Última atualização: Há 3 semanas
                </div>
            </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Voltar para o topo</a>
                </p>
                <p>Gabriel Souza B. Doudement © Laravel application</p>

            </div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>


        <svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">equipes</text></svg></body>



</x-layout>
