<?php


namespace SysFlow\Controller;
use SysFlow\Entity\Tarefas;
use SysFlow\Infra\EntityManagerCreator;

class AlteracaoTarefa extends ControllerComHtml implements InterfaceRequisicao
{

    private $repositorioTarefas;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioTarefas = $entityManager->getRepository(Tarefas::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT);
    
        if (is_null($id) || $id === false) {
            header('Location: /listar-tarefas');
        }
    
        $tarefa = $this->repositorioTarefas->find($id);
       
       echo  $this->renderizaHtml(
        'tarefas/tarefa.php', 
        [
            'tarefa' => $tarefa, 
            'titulo' => 'Alterar Tarefa:</br> ' .$tarefa->getTitulo()
        ]);
    
    }
}