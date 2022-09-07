<x-layout title="Adicionar Equipe">

    <form method="post" action="{{route('funcionarios.store')}}" :update="false">
        @csrf

        <div class="row mb-3">
            <div class="col-2">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="funcao">Função</label>
                    <select class="form-control" name="funcao">
                        <?php foreach ($equipes as $equipe):?>
                        <option value="{{$equipe->nome}}">{{$equipe->nome}}</option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="equipe_nome">Equipe</label>
                    <select class="form-control" id="equioe_id" name="equipe_id">
                        <?php foreach ($equipes as $equipe):?>
                        <option value="{{$equipe->id}}">{{$equipe->nome}}</option>
                        <?php endforeach;?>
                    </select>
                </div>

                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}">


            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>






</x-layout>
