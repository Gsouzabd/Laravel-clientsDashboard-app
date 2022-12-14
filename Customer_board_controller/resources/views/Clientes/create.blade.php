

<x-layout title='Novo Cliente'>

    <form method="post" action="{{route('clientes.store')}}" :update="false" enctype="multipart/form-data">
        @csrf

    <div class="row mb-3">

        <div class="col-8">
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

            <div class="col-2">
                <div class="form-group">
                    <label for="equipe_nome">Equipe</label>
                    <select class="form-control" id="equipe_nome" name="equipe_nome">
                        <option id="Desenvolvimento" name="Desenvolvimento">Desenvolvimento</option>
                        <option id="Marketing" name="Marketing">Marketing</option>
                        <option id="Desenvolvimento/marketing" name="Desenvolvimento/marketing">Desenvolvimento e Marketing</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                        <input type="file" name="logo" accept="image/png, image/gif, image/jpeg" />
                </div>

            </div>
        </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>


</x-layout>
