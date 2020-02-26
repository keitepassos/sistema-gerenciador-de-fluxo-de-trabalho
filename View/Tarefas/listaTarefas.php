
<?php  include __DIR__ . '/../topo.php'; ?>    
            <a href="/formulario-tarefa" class="btn btn-primary mb-2">
                Nova Tarefa
            </a>
        </div>
        <ul class="list-group">
            <?php foreach ($cursos as $curso): ?>
                <li class="list-group-item">
                    <?= $curso->getDescricao(); ?>
                </li>
            <?php endforeach; ?>
        
        </ul>
<?php include __DIR__ . '/../rodape.php'; ?>    
   