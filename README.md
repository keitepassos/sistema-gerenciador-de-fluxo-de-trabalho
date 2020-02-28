# sistema-gerenciador-de-fluxo-de-trabalho 
-->Apenas o crud de Tarefas (Por enquanto)


sistema para gerenciar um pequeno fluxo de trabalho

Requerido php 7.1+

Instalar o composer:
composer install


Subir o servidor:
php -S localhost:8080 -t pubic


Caso não tiver tabela de tarefas:
vendor\bin\doctrine dbal:run-sql "create table tarefas(id integer primary key autoincrement not null, titulo text null, tipo text null);"

Caso erro:
vendor\bin\doctrine orm:generate-proxies

Info: php+doctrine+sqlite




