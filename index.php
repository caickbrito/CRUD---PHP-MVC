<?php 
ob_start();

require __DIR__.'/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace('Source\App');

//Rotas Principais// 
$router->group(null);
$router->get('/', 'Web:home', 'web.home');
$router->get('/{page}', 'Web:home', 'web.home');
$router->get('/edit/{id}', 'Web:edit', 'web.edit');
$router->post('/edit', 'Web:editPost', 'web.editPost');
$router->get('/delete/{id}', 'Web:delete', 'web.delete');
$router->get("/register", "Web:register", "web.register");
$router->post("/register", "Web:registerPost", "web.registerPost");

//Rotas de Erros
$router->group('erro');
$router->get('/{errcode}', "Web:error");




//Execução das rotas
$router->dispatch();



//Redirecionamento de erros
if ($router->error()) {
	$router->redirect("/erro/{$router->error()}");
}

ob_end_flush();