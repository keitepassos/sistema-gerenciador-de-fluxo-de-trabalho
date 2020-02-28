<?php

namespace SysFlow\Controller;


class NovaTarefa extends ControllerComHtml implements  InterfaceRequisicao
{

    public function processaRequisicao():void
    {
      
       echo $this->renderizaHtml('Tarefas/tarefa.php', [
        'titulo' => 'Nova Tarefa'
         ]);
        
    }

}