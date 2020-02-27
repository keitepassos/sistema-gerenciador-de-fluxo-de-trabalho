<?php

require __DIR__ . '/../vendor/autoload.php';

use SysFlow\Controller\{ NovaTarefa,
                         ListarTarefas,
                         CadastroTarefa,
                         ExclusaoTarefa,
                         AlteracaoTarefa};


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit;
}

$classe = $rotas[$caminho];
$controller = new $classe;
$controller->processaRequisicao();