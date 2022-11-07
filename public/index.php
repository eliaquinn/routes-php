<?php
require '../vendor/autoload.php';
require '../routes/router.php';

try {
  $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
  $request = $_SERVER["REQUEST_METHOD"];

  // verifica se existe o GET ou POST no router.php
  if (!isset($router[$request])) {
    throw new Exception("A rota não existe");
  }
  //verifica se existe o valor no array router[chave]
  if (!array_key_exists($uri, $router[$request])) {
    //obs.: nessa parte tive que mudar pro servidor do php pois rodei no xamp, ele não executou devido ele tentar pegar apenas a uri da pagina, mas como ele não roda direto no localhost ele pega duas uri pasta_criada/public, o certo é pegar apenas a raida /
    throw new Exception("A rota não existe");
  }

  $controller = $router[$request][$uri];
  $controller();
} catch (Exception $error) {
  $error->getMessage();
}


//iniciar o servidor php
//php -S localhost:8000 -t public
//ele vai colocar a pasta /public como raiz