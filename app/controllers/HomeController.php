<?php

namespace app\controllers;

class HomeController
{
  public function index($params)
  {
    // var_dump('Vim do HomeController metodo index');
    // var_dump($params);
    return Controller::view("home");
  }
}
