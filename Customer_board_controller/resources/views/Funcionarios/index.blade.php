
<x-layout title="funcionarios">

    <div class="mb-2">
        <br>
        <a href="{{route('equipes.create')}}" class="btn btn-dark mb-2">Adicionar</a>
        @isset($successMsg)
            <div class="alert alert-success">
                    <?=$successMsg?>
            </div>
        @endisset
        <table class="table table-striped">

            <div class="col-2">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Equipe Id</th>
                </tr>
                </thead>


                <tbody>
                <?php foreach ($funcionarios as $funcionario):?>
                <tr>
                    <td> <?= $funcionario->nome?></td>
                    <td> <?= $funcionario->equipe_id?></td>
                    <td><a href="{{route('funcionarios.show', $funcionario->id)}}"><button class="btn-dark">Ver funcionario</button></a> </td>
                    <td><a href="{{route('funcionarios.edit', $funcionario->id)}}"><button class="btn btn-dark mb-2" >Editar</button></a></td>
                    <form action="{{route('funcionarios.destroy', $funcionario->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <td> <button class="btn btn-red mb-2" type="submit">Excluir</button></td>
                    </form>
                </tr>
                <?php endforeach;?>
                </tbody>
            </div>
        </table>

    </div>

</x-layout>

