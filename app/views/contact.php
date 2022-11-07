<?php $this->layout('master'); ?>

<h1>Pagina Contact</h1>

<form action="/contact" , method="POST">
  <input type="text" placeholder="type your name" name="name">
  <input type="email" placeholder="example@email.com" name="email">
  <button type="submit">Enviar</button>
</form>