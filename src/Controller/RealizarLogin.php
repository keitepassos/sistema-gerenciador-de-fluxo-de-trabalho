<?php 

namespace SysFlow\Controller;

use SysFlow\Entity\Usuario;
use SysFlow\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceRequisicao
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuarios = $entityManager->getRepository(Usuario::class);
    }
    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST,
        'email',
        FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {        
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = "O e-mail digitado não é um e-mail válido";
            header('Location: /login');
            return;
        }

        $senha = filter_input(INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING);

        /** @var  $usuario */
        $usuario = $this->repositorioUsuarios
            ->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = "E-mail ou senha inválidos";
            header('Location: /login');
            return;
        }
       
        $_SESSION['logado'] = true;
        $_SESSION['usuario_logado'] = $usuario;

        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo_mensagem']);
        
        header('Location: /listar-tarefas');
            
    }
}