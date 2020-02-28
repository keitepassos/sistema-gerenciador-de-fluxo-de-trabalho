<?php

namespace SysFlow\Controller;
use SysFlow\Entity\Tarefas;
use SysFlow\Infra\EntityManagerCreator;


class ListarTarefas extends ControllerComHtml implements InterfaceRequisicao
{

    private $repositorioDeTarefas;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
         $this->repositorioDeTarefas = $entityManager
             ->getRepository(Tarefas::class);
    }
    public function processaRequisicao():void
    {
    
        $tarefas = $this->repositorioDeTarefas->findAll();

      echo $this->renderizaHtml('Tarefas/listaTarefas.php', [
        'tarefas' => $this->repositorioDeTarefas->findAll(), 
        'titulo' => 'Lista de Tarefas'
        ]);
    }

}