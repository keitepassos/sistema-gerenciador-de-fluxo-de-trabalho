<?php


namespace SysFlow\Controller;


class Deslogar implements InterfaceRequisicao
{

    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /login');
    }
}