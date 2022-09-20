
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
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Valor</th>
                <th scope="col">Modelo</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Status</th>
                <th scope="col">Equipe</th>
                <th scope="col">Ativo</th>

            </tr>
            </thead>
        <?php foreach ($clientes as $cliente):?>
        <tbody>
        <tr>
            <?php if ($cliente->logo == true):?>
                <td><img src="{{asset('storage/' . $cliente->logo)}}" class="img-thumbnail" style="height: 40px"></td>
            <?php else:?>
                <td><img src="{{asset('storage/clientes_logo/empty-logo.jpeg')}}" class="img-thumbnail" style="height: 40px"></td>
            <?php endif;?>


                <td> <?= $cliente->nome?></td>
                <td> <?= $cliente->valor?></td>
                <td> <?= $cliente->modelo?></td>
                <td> <?= $cliente->plataforma?></td>
                <td><?= $cliente->status?></td>
                <?php
                $equipes = $cliente->equipe;
          foreach ($equipes as $equipe):?>
                <td><?= $equipe->nome?></td>
            <?php endforeach;?>

            <?php if ($cliente->ativo == true):?>
            <td>Sim</td>
            <?php else:?>
            <td>Não</td>
            <?php endif;?>

            <td><a href="{{route('clientes.edit', $cliente->id)}}"><button type="button" class="btn btn-primary"><i class="far fa-eye">Editar</i></button></a></td>
            <form action="{{route('clientes.destroy', $cliente->id)}}" method="post">

                @method('DELETE')
                @csrf
            <td> <button class="btn btn-danger mb-2" type="submit">Excluir</button></td>
            </form>
        </tr>

    </tbody>
        <?php endforeach; ?>
    </table>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $clientes->links()}}
    </div>

</div>
</x-layout>

