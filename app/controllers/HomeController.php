<?php

namespace app\controllers;

class HomeController
{
  public function index($params)
  {
    // var_dump('Vim do HomeController metodo index');
    // var_dump($params);
    $data = [
      "pagename" => "Home",
      "title" => "Pagina home do website",
      "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique repellat facilis nostrum expedita adipisci quos, rem quas sed nesciunt, voluptates quasi cupiditate? Aliquid dignissimos obcaecati laboriosam laudantium praesentium animi eos.",
    ];

    return Controller::view("home", $data);
  }
}
