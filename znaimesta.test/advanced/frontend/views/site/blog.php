<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;

print_r ($arrayInView);

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach ($varInView as $item): ?>
        <h2><?php echo $item->blog_title ?></h2> // Имя ячейки в таблице должно быть соответственно blog_title
    <?php endforeach ?>

</div>