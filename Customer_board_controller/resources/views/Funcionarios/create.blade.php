<x-layout title="Adicionar Equipe">

    <form method="post" action="{{route('equipes.store')}}" :update="false">
        @csrf

        <div class="row mb-3">
            <div class="col-2">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="funcao">Função</label>
                    <input type="text" name="funcao">
                </div>
                <div class="form-group">
                    <label for="equipe_nome">Equipe</label>
                    <select class="form-control" id="equipe_nome" name="equipe_nome">

                        <option name="Desenvolvimento">Desenvolvimento</option>
                        <option id="Marketing" name="Marketing">Marketing</option>
                        <option id="Desenvolvimento/marketing" name="Desenvolvimento/marketing">Desenvolvimento e Marketing</option>
                    </select>


                </div>


            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>






</x-layout>
