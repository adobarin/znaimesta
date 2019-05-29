<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */
/* @var $form ActiveForm */

?>
<div class="site-posts">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
       
		
		<?= $form->field($model, 'text')->widget(CKEditor::className(),[
 'editorOptions' => [
 'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
 'inline' => false, //по умолчанию false
 ],
]); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-posts -->
