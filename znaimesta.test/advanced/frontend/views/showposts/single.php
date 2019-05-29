<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$post_id = $_GET['post_id'];

?>

    <h1>Записи</h1>


<?php foreach ($posts as $post) {
    if ($post->post_id == $post_id) {
        ?>
        <p> Test </p>
        <p>
            <?= Html::encode("{$post->title}") ?>

        </p>
        <p>
            <?= Html::encode("{$post->text}") ?>
        </p>
        <?


    } }?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>