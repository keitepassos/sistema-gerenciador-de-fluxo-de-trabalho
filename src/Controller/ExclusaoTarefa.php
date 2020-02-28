<?php


namespace SysFlow\Controller;
use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;



class ExclusaoTarefa implements InterfaceRequisicao
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,
        'id',
        FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false) {
            
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = 'Tarefa não existe.';

            header('Location: /listar-tarefas');
            exit;
        }

        $tarefas = $this->entityManager->getReference(Curso::class, $id);
        $this->entityManager->remove($tarefas);
        $this->entityManager->flush();
        $_SESSION['tipo_mensagem'] = 'success';
        $_SESSION['mensagem'] = 'Tarefa excluído com sucesso';
        header('Location: /listar-tarefas');
        }
}