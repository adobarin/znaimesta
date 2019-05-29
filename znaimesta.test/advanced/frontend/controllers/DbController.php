<?php
namespace frontend\controllers;
use frontend\models\Category;
use Yii;
use frontend\models\TestForm; // подключаем нашу модель
 
class PostController extends AppController
{
    public function actionIndex() {
        $model = new TestForm(); //создаём объект
        //теперь, будем писать данные в объекте
        $model->post_id = "333";
        $model->id = "10";
        $model->text = "Привет, классные статьи. Спасибо.";
        // и сохраним
        $model->save();
    }
}