<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';



$config['displayErrorDetails'] = true;
$config['db']['host']   = "localhost";
$config['db']['user']   = "user";
$config['db']['pass']   = "password";
$config['db']['dbname'] = "exampleapp";

$container['config'] = $config;

$app = new \Slim\App($container);
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    global $app;
    var_dump($app->getContainer());
    var_dump($this->config);
    return $response;
});
$app->run();