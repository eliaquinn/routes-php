<?php

namespace app\controllers;

class BlogController
{
  public function blog()
  {
    $files = [
      "pagename" => 'Blog Noticias',
      "title" => "Origem do blog",
      "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente ad quos asperiores consectetur velit vero earum consequatur! Eveniet ipsam numquam, maiores quasi consequuntur fugiat reiciendis ipsa dolorem, iste cumque voluptatem."
    ];

    Controller::view('blog', $files);
  }
}
