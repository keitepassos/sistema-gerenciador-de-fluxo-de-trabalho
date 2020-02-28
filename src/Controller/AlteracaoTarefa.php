<?php


namespace SysFlow\Controller;
use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;

class AlteracaoTarefa extends ControllerComHtml implements InterfaceRequisicao
{

    private $repositorioTarefas;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioTarefas = $entityManager->getRepository(Curso::class);
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
    
        $curso = $this->repositorioTarefas->find($id);
       // $titulo =  'Alterar Tarefa </br>' . $curso->getDescricao();
       // require __DIR__ . '/../../view/tarefas/tarefa.php';
       echo  $this->renderizaHtml(
        'tarefas/tarefa.php', 
        [
            'curso' => $curso, 
            'titulo' => 'Alterar Tarefa:</br> ' .$curso->getDescricao()
        ]);
    
    }
}