<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "languages".
 *
 * @property int $id
 * @property string $title
 * @property string $shortTitle
 * @property string $img
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'languages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'shortTitle', 'img'], 'required'],
            [['img'], 'string'],
            [['title'], 'string', 'max' => 32],
            [['shortTitle'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'shortTitle' => 'Short Title',
            'img' => 'Img',
        ];
    }

    public function getCategories(){
        return $this->hasOne(Categories::class, ['id' => 'lang_id']);
    }

    public function getPages(){
        return $this->hasOne(Pages::class, ['id' => 'lang_id']);
    }
}
