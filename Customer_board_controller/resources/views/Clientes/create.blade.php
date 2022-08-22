<x-layout title='Novo Cliente'>

    <form method="post" action="{{route('clientes.store')}}">
        @csrf
        <div class="mb-3">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" aria-describedby="emailHelp" placeholder="Valor">
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
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>


</x-layout>
