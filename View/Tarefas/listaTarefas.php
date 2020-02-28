
<?php  include __DIR__ . '/../topo.php'; ?>    
            <a href="/formulario-tarefa" class="btn btn-primary mb-2">            
                Nova Tarefa
            </a>
        </div>
        <ul class="list-group">
            <?php foreach ($tarefas as $tarefa): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <?= $tarefa->getTitulo(); ?>-<?= $tarefa->getTipo(); ?>
                    <span>
                        <a href="/alterar-tarefa?id=<?= $tarefa->getId(); ?>" class="btn btn-info btn-sm">
                            Alterar
                        </a>
                        <a href="/excluir-tarefa?id=<?= $tarefa->getId(); ?>" class="btn btn-danger btn-sm">
                            Excluir
                        </a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul> 
<?php include __DIR__ . '/../rodape.php'; ?>    
   