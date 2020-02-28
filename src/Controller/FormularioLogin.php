<?php


namespace SysFlow\Controller;


class FormularioLogin extends ControllerComHtml implements InterfaceRequisicao
{

    public function processaRequisicao(): void
    {
        
        echo $this->renderizaHtml('login/formulario.php', [
            'titulo' => 'Login'
        ]);

    }
}