<x-layout title="Editar Equipe">

    <form method="post" action="{{route('equipes.update', $equipe->id)}}">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-2">
                <div class="form-group">
                    <label for="equipe_nome">Equipe</label>
                    <input type="text" name="equipe_nome" value="{{$equipe->nome}}">
                </div>
                <div class="form-group">
                    <label for="funcionarios[]">Funcionários</label>
                    </br>
                    <select class="select" name="funcionarios[]" multiple>
                        <option value="Marcia">Marcia</option>
                        <option value="Marcia">Edilange</option>
                        <option value="Marcia">Samuel</option>
                        <option value="Marcia">Gabriel</option>
                    </select>

                    <input type="hidden" name="equipe_id" value="{{$equipe->id}}">

                </div>

            </div>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>






</x-layout>
