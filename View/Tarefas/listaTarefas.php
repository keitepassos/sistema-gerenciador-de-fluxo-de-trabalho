
<?php  include __DIR__ . '/../topo.php'; ?>    
            <a href="/formulario-tarefa" class="btn btn-primary mb-2">            
                Nova Tarefa
            </a>
        </div>
        <ul class="list-group">
            <?php foreach ($cursos as $curso): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <?= $curso->getDescricao(); ?>
                    <span>
                        <a href="/alterar-tarefa?id=<?= $curso->getId(); ?>" class="btn btn-info btn-sm">
                            Alterar
                        </a>
                        <a href="/excluir-tarefa?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">
                            Excluir
                        </a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul> 
<?php include __DIR__ . '/../rodape.php'; ?>    
   