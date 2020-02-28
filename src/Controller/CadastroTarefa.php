<?php


namespace SysFlow\Controller;

use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;

class CadastroTarefa extends ControllerComHtml implements InterfaceRequisicao
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
        
        $id = filter_input(
                INPUT_GET,
                'id',
                FILTER_VALIDATE_INT);

        $tarefa = new Curso();
        $tarefa->setDescricao($descricao);
    
        if (!is_null($id) && $id !== false) {

            $tarefa->setId($id);
            $this->entityManager->merge($tarefa);

            $_SESSION['mensagem'] = "Tarefa  $descricao alterada com sucesso";
        } else {
            $this->entityManager->persist($tarefa);
            $_SESSION['mensagem'] = "Tarefa  $descricao salva com sucesso";
        }
        $this->entityManager->flush();
        
        
       
        
        $_SESSION['tipo_mensagem'] = 'success';
    
        header('location:/listar-tarefas', true, 302);

    }
}