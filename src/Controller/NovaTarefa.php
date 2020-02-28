<?php

namespace SysFlow\Controller;


class NovaTarefa extends ControllerComHtml implements  InterfaceRequisicao
{

    public function processaRequisicao():void
    {
        //$titulo = 'Nova Tarefa';
       // require __DIR__ . '/../../view/Tarefas/tarefa.php';
       echo $this->renderizaHtml('Tarefas/tarefa.php', [
        'titulo' => 'Nova Tarefa'
         ]);
        
    }

}