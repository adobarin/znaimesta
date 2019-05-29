<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Статьи</h1>
<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <?= Html::encode("{$post->title} ({$post->text})") ?>:
        <?= $post->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>