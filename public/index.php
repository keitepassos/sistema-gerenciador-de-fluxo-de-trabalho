<?php

require __DIR__ . '/../vendor/autoload.php';
use SysFlow\Controller\ListarTarefas;
use SysFlow\Controller\NovaTarefa;

    switch ($_SERVER['PATH_INFO']) {
        case '/listar-tarefas':
            $controlador = new ListarTarefas();
            $controlador->processaRequisicao();
            break;
        case '/formulario-tarefa':
            $controlador = new NovaTarefa();
            $controlador->processaRequisicao();
            break;
        default:
            print 'Página não existe';
        break;
    }

    