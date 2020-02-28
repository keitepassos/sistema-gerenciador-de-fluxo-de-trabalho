<?php  include __DIR__ . '/../topo.php'; ?>    
    <form action='/salvarTarefa<?= isset($tarefa) ? '?id= ' . $tarefa->getId() : ''; ?>' METHOD='POST'>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="descricao" class="form-control" value="<?= isset($tarefa) ? $tarefa->getTitulo(): ''; ?>">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            
            <select name='tipo'>
                <option value='Abetura' <?= isset($tarefa) ? ($tarefa->getTipo()=='Abertura'?'selected':''): ''; ?> >Abertura</option>
                <option value='Intermediária' <?= isset($tarefa) ? ($tarefa->getTipo()=='Intermediária'?'selected':''): ''; ?> >Intermediária</option>
                <option value='Finalizadora' <?= isset($tarefa) ? ($tarefa->getTipo()=='Finalizadora'?'selected':''): ''; ?> >Finalizadora</option>
            </select>
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
<?php include __DIR__ . '/../rodape.php'; ?>    