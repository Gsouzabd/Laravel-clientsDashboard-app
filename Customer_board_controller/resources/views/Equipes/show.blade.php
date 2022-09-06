<x-layout title="Equipe: {{$equipe->nome}}">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Função</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($funcionarios as $funcionario):?>
        <tr>
            <th scope="row"><?=$funcionario->id?></th>
            <td><?=$funcionario->nome?></td>
            <td><?=$funcionario->funcao?></td>

        </tr>
        <?php endforeach;?>
        </tbody>
    </table>


</x-layout>
