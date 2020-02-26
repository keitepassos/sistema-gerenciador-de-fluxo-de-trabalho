<?php

namespace SysFlow\Controller;
use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;


class ListarTarefas implements InterfaceRequisicao
{

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
         $this->repositorioDeCursos = $entityManager
             ->getRepository(Curso::class);
    }
    public function processaRequisicao():void
    {
    
        $cursos = $this->repositorioDeCursos->findAll();
        $titulo = 'Lista de Tarefas';
        require __DIR__ . '/../../view/Tarefas/listaTarefas.php';
    }

}