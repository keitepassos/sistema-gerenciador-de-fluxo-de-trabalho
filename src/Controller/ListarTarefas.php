<?php

namespace SysFlow\Controller;
use SysFlow\Entity\Curso;
use SysFlow\Infra\EntityManagerCreator;


class ListarTarefas implements InterfaceRequisicao
{

    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
         $this->repositorioDeCursos = $entityManager
             ->getRepository(Curso::class);
    }
    public function processaRequisicao():void
    {
    
        $cursos = $this->repositorioDeCursos->findAll();

        //$url = 'http://g1.globo.com/dynamo/tecnologia/rss2.xml';
        $url = "https://www.canalti.com.br/api/pokemons.json";
 
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $pokemons = json_decode(curl_exec($ch));
        //var_dump($pokemons);

        $titulo = 'Lista de Tarefas';
        require __DIR__ . '/../../view/Tarefas/listaTarefas.php';
    }

}