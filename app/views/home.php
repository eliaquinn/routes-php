<?php $this->layout('template', ['label' => $pagename]); ?>

<h1><?= $this->e($title) ?></h1>

<p><?= $this->e($content) ?></p>

<div class="link">
  <a href="/blog">Blog</a>
</div>

<?php $this->unshift('styles') ?>
<link rel="stylesheet" href="css/style.css" />
<?php $this->end() ?>