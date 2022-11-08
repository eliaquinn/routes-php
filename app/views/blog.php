<?php $this->layout('template', ['label' => $pagename]) ?>

<h2><?= $this->e($title) ?></h2>

<p><?= $this->e($content) ?></p>

<div class="buttons">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Contato</a></li>
  </ul>
</div>

<?php $this->unshift('styles') ?>
<link rel="stylesheet" href="css/blog.css" />
<?php $this->end() ?>