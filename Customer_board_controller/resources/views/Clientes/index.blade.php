<br>
<x-layout title="Clientes">

<div class="mb-2">
    <br>
    <a href="{{route('clientes.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Modelo</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Status</th>
            <th scope="col">Criado em</th>
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
            <td><?= $cliente->created_at0?></td>                                                                                                           ?></td>
        <td><button class="btn btn-dark mb-2">Editar</button></td>
        <td> <button class="btn btn-dark mb-2">Excluir</button></td>
    </tr>
    </tbody>
        <?php endforeach; ?>
    </table>

</div>
</x-layout>

