<?php

require __DIR__ . '/../vendor/autoload.php';

use SysFlow\Controller\{ NovaTarefa,
                         ListarTarefas,
                         CadastroTarefa,
                         ExclusaoTarefa,
                         AlteracaoTarefa,
                         FormularioLogin,
                         RealizarLogin,
                         Deslogar};


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit;
}

session_start();

$ehRotaDeLogin = stripos($caminho, 'login');

if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
    header('Location: /login');
    exit();
}

$classe = $rotas[$caminho];
$controller = new $classe;
$controller->processaRequisicao();

//unset($_SESSION['mensagem']);
//unset($_SESSION['tipo_mensagem']);