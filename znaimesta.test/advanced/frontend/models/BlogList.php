<?
namespace frontend\models;

class BlogList extends \yii\db\ActiveRecord{

      public static function tableName()
      {
             return 'tbl_post'; // Имя таблицы в БД в которой хранятся записи блога
      }


      public static function getAll()
      {
             $data = self::find()->all();
             return $data;
      }

}

?>