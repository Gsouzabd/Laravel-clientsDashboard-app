<x-layout title="Adicionar Equipe">

        <form method="post" action="{{route('equipes.store')}}" :update="false">
            @csrf

            <div class="row mb-3">
                <div class="col-2">
                    <div class="form-group">
                        <label for="equipe_nome">Equipe</label>
                        <input type="text" name="equipe_nome">
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

                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}">

                    </div>

                </div>
            </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>






</x-layout>
