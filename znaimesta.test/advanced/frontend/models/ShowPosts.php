<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class ShowPosts extends ActiveRecord
{
	    public static function tableName()
    {
        return '{{%posts}}';
    }
}