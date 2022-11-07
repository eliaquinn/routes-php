<?php

function load(string $controller, string $action)
{
  try {
    //verificar se o controller existe
    $controllerNamespace = "app\controllers\\{$controller}";

    // var_dump($controllerNamespace);
    if (!class_exists($controllerNamespace)) {
      throw new Exception("O controller {$controller} não existe.");
    }

    $controllerInstance = new $controllerNamespace();

    //verifica se existe o metodo no controller selecionado
    if (!method_exists($controllerInstance, $action)) {
      throw new Exception("O metodo {$action} não existe no controller {$controller}");
    }

    //aqui estamos executando o metodo e passando por paramento
    $controllerInstance->$action((object) $_REQUEST);
  } catch (Exception $error) {
    echo $error->getMessage();
  }
}


//array de rotas para ser usado na função load()
$router = [
  'GET' => [
    '/' => fn () => load('HomeController', 'index'),
    '/contact' => fn () => load('ContactController', 'index')
  ],
  'POST' => [
    '/contact' => fn () => load('ContactController', 'store')
  ]
];
