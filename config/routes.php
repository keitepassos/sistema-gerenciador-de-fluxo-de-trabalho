<?php


use SysFlow\Controller\{ NovaTarefa,
                         ListarTarefas,
                         CadastroTarefa,
                         ExclusaoTarefa,
                         AlteracaoTarefa};

return  [
    '/listar-tarefas' => ListarTarefas::class,
    '/formulario-tarefa' => NovaTarefa::class,
    '/salvarTarefa' => CadastroTarefa::class,
    '/excluir-tarefa' => ExclusaoTarefa::class,
    '/alterar-tarefa'=>AlteracaoTarefa::class
];
