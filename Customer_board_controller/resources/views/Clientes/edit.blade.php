
<x-layout title='Editar Cliente'>

    <form method="post" action="{{route('clientes.update', $cliente->id)}}">
        @csrf
        @method('PUT')

        <div class="row mb-3">

            <div class="col-8">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{$cliente->nome}}">
                </div>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" aria-describedby="emailHelp" value="{{$cliente->valor}}"
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo de site</label>
                    <select class="form-control" id="modelo" name="modelo">
                        <option id="ecommerce" name="ecommerce">E-commerce</option>
                        <option id="institucional" name="institucional">Institucional</option>
                        <option id="hibrido" name="hibrido">Híbrido</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="plataforma">Plataforma</label>
                    <select class="form-control" id="plataforma" name="plataforma">
                        <option value="magento" name="magento">Magento</option>
                        <option value="wordpress" name="wordpress">WordPress</option>
                        <option value="magento/wordpress" name="mage_wp">Magento & Wordpress</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="implantacao" name="implantacao">Implantação</option>
                        <option value="finalizado" name="finalizado">Finalizado</option>
                        <option value="negociacao" name="negociacao">Negociação</option>
                    </select>
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label for="equipe_nome">Equipe</label>
                    <select class="form-control" id="equipe_nome" name="equipe_nome">
                        <option id="Desenvolvimento" name="Desenvolvimento">Desenvolvimento</option>
                        <option id="Marketing" name="Marketing">Marketing</option>
                        <option id="Desenvolvimento/marketing" name="Desenvolvimento/marketing">Desenvolvimento e Marketing</option>
                    </select>
                </div>
                <?php foreach ($equipe as $equip):?>
                <input type="hidden" nome="equipe_id" value="{{$equip->id}}">
                <?php endforeach;?>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <input type="checkbox" name="ativo" @if($cliente->ativo) checked @endif/>Ativo
                </div>
            </div>
        </div>
        <button class="btn btn-primary m-2" type="submit">Salvar Alterações</button>
    </form>


</x-layout>
