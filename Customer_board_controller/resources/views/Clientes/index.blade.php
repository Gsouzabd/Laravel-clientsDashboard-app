<x-layout title="Clientes">

<div class="mb-2">
    <br>
    <a href="{{route('clientes.create')}}" class="btn btn-dark mb-2">Adicionar</a>
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
                <th scope="col">Valor</th>
                <th scope="col">Modelo</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Status</th>
                <th scope="col">Equipe</th>

            </tr>
            </thead>


        <?php foreach ($clientes as $cliente):?>

        <tbody>
        <tr>
                <td> <?= $cliente->nome?></td>
                <td> <?= $cliente->valor?></td>
                <td> <?= $cliente->modelo?></td>
                <td> <?= $cliente->plataforma?></td>
                <td><?= $cliente->status?></td>

            <?php foreach ($equipes as $equipe):?>
            <td><?= $equipe->nome?>
            <a href="{{route('equipes.show', $equipe->id)}}"><button class="btn btn-dark mb-1">Ver Equipe</button></a> </td>
            <?php endforeach; ?>

            <td><a href="{{route('clientes.edit', $cliente->id)}}"><button class="btn btn-dark mb-2" >Editar</button></a></td>
            <form action="{{route('clientes.destroy', $cliente->id)}}" method="post">
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

