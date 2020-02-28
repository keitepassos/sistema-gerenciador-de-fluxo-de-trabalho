<?php


namespace SysFlow\Controller;


class ControllerComHtml
{

    public function renderizaHtml(string $caminhoTemplate, $dados)
    {
        extract($dados);
        ob_start();

        require __DIR__ . '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }

}