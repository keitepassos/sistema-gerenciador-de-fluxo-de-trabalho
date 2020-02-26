<?php

namespace SysFlow\Controller;


class NovaTarefa implements InterfaceRequisicao
{

    public function processaRequisicao():void
    {
        $titulo = 'Nova Tarefa';
        require __DIR__ . '/../../view/Tarefas/tarefa.php';
        
    }

}