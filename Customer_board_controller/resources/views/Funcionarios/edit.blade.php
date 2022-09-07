<x-layout title="Editar Funcionario '{{$funcionario->nome}}' ">

    <form method="post" action="{{route('funcionarios.update', $funcionario->id)}}">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-2">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="{{$funcionario->nome}}">
                </div>
            </br>
                <div class="form-group">
                    <label for="funcao">Função</label>
                    <select name="funcao">
                    <?php foreach ($equipes as $equipe):?>
                    <option value="{{$equipe->nome}}">{{$equipe->nome}}</option>
                    <?php endforeach;?>
                    </select>
                </div>
            </br>
                <div class="form-group">
                    <label for="equipe">Equipes</label>
                    </br>
                    <select class="select" name="equipe_id" multiple>
                        <?php foreach ($equipes as $equipe):?>
                        <option value="{{$equipe->id}}">{{$equipe->nome}}</option>
                        <?php endforeach;?>
                    </select>

                </div>

            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>






</x-layout>
