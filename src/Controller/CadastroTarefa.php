<?php


namespace SysFlow\Controller;

use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;

class CadastroTarefa implements InterfaceRequisicao
{

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING);

        $tarefa = new Curso();
        $tarefa->setDescricao($descricao);
    
        $this->entityManager->persist($tarefa);
        $this->entityManager->flush();

       echo "Curso $descricao salvo com sucesso";
    
        header('location:/listar-tarefas', true, 302);

    }
}