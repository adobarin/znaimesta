<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%posts}}".
 *
 * @property int $post_id
 * @property string $title
 * @property string $text
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%posts}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'title' => 'Title',
            'text' => 'Text',
        ];
    }
}
