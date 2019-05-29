<?php
 
namespace frontend\models;
use yii\db\ActiveRecord; // подключаем ActiveRecord потому что будем работать с базой данных
 
class TestForm extends ActiveRecord {
    // добавляем метод tableName потому что у нас таблица называется не как модель
    public static function tableName()
    {
        return "posts";
    }
}
 
?>