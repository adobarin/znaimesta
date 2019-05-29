<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Статьи</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
	<p>
        <?= Html::encode(
		"{$country->title} "		
		) ?>
	</p>
		<p>
        <?= Html::encode(
		"{$country->text}"
		
		) ?>
	</p>
        
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>