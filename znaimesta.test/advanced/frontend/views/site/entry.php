<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
	
	<?= $form->field($model, 'text')->widget(CKEditor::className(),[
 'editorOptions' => [
 'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
 'inline' => false, //по умолчанию false
 ],
]); ?>
    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>