<?
namespace frontend\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
			['text', 'trim'],
            ['email', 'email'],
        ];
    }
}