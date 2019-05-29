<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Новости</h1>
<ul>
<?php foreach ($posts as $post): ?>

    <li>

	<p>
        <?= Html::encode("{$post->title}") ?>

    </p>
	<p>
	<?= Html::encode("{$post->text}") ?>
	</p>
        <a href="/advanced/frontend/web/index.php?r=showposts/single&post_id=<? echo $post->post_id; ?>" >Перейти </a>
    <hr>
    </li>

<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>