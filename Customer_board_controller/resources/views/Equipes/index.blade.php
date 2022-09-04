
<x-layout title="Equipes">

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
                    <th scope="col">Cliente Id</th>
                </tr>
                </thead>

                <?php foreach ($equipes as $equipe):?>
                    <tbody>
                    <tr>
                        <td> <?= $equipe->nome?></td>
                        <td> <?= $equipe->cliente_id?></td>
                        <td><a href="{{route('equipes.show', $equipe->id)}}"><button class="btn-dark">Ver Equipe</button></a> </td>
                        <td><a href="{{route('equipes.edit', $equipe->id)}}"><button class="btn btn-dark mb-2" >Editar</button></a></td>
                        <form action="{{route('equipes.destroy', $equipe->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <td> <button class="btn btn-red mb-2" type="submit">Excluir</button></td>
                        </form>
                    </tr>

                    <tbody>

                    </tbody>
                <?php endforeach; ?>
        </table>

    </div>
</x-layout>

