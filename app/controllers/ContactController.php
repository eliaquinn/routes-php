<?php

namespace app\controllers;

class ContactController
{
  public function index()
  {
    // var_dump('Vim do ContactController metodo index');
    Controller::view("contact");
  }

  public function store($params)
  {
    var_dump('Vim do ContactController metodo store');
    var_dump($params);
  }
}
