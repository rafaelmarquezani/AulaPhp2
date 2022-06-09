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

$router->get('/exemplo','Aluno\Rafael\Controller\ExercicioController::exibir');
$router->post('/exemplo-resultado',
'Aluno\Rafael\Controller\ExercicioController::exibirResultado');

$router->get('/cliente/novo',
'Aluno\Rafael\Controller\ClientesController::abrirFormularioInserir');

$router->post('/cliente/inserir',
'Aluno\Rafael\Controller\ClientesController::inserirCliente');

$router->get('/clientes',
'Aluno\Rafael\Controller\ClientesController::abrirListaClientes');

$router->get('/cliente/alterar/{id}',
'Aluno\Rafael\Controller\ClientesController::abrirFormularioAlterar');

$router->post('/cliente/editar/{id}',
'Aluno\Rafael\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}',
'Aluno\Rafael\Controller\ClientesController::excluirCliente');

$router->get('/produto/novo',
'Aluno\Rafael\Controller\ProdutosController::abrirFormularioInserir');

$router->post('/produto/inserir',
'Aluno\Rafael\Controller\ProdutosController::inserirProduto');

$router->get('/produtos',
'Aluno\Rafael\Controller\ProdutosController::abrirListaProdutos');

$router->get('/produto/alterar/{id}',
'Aluno\Rafael\Controller\ProdutosController::abrirFormularioAlterar');

$router->post('/produto/editar/{id}',
'Aluno\Rafael\Controller\ProdutsController::editarProduto');

$router->get('/produto/excluir/{id}',
'Aluno\Rafael\Controller\ProdutosController::excluirProduto');

//Adicionar validas abaixo

$result = $router->handler();

if(!$result){
    http_response_code(404);
    echo"Página não encontrada";
    die();
}

echo $result($router->getParams());