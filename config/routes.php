<?php


use SysFlow\Controller\{ NovaTarefa,
                         ListarTarefas,
                         CadastroTarefa,
                         ExclusaoTarefa,
                         AlteracaoTarefa,
                         FormularioLogin,
                         RealizarLogin,
                         Deslogar};

return  [
    '/listar-tarefas' => ListarTarefas::class,
    '/formulario-tarefa' => NovaTarefa::class,
    '/salvarTarefa' => CadastroTarefa::class,
    '/excluir-tarefa' => ExclusaoTarefa::class,
    '/alterar-tarefa'=>AlteracaoTarefa::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class

];
