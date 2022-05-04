<?php

require_once __DIR__.'/vendor/autoload.php';

//Recupera o que o usuario digitou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar a classe Router
$router = new \Aluno\Rafael\Router($method, $path);

//Adicionar as rotas válidas abaixo

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

//Adicionar validas abaixo

$result = $router->handler();

if(!$result){
    http_response_code(404);
    echo"Página não encontrada";
    die();
}

echo $result($router->getParams());