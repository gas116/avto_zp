<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string $page
 * @property int $lang_id
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'page'], 'required'],
            [['lang_id'], 'integer'],
            [['title', 'page'], 'string', 'max' => 255],
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
            'page' => 'Page',
            'lang_id' => 'Lang ID',
        ];
    }

    public function getLangueges(){
        return $this->hasOne(Languages::class, ['lang_id' => 'id']);
    }

    public function getPages(){
        return $this->hasMany(Pages::class, ['cat_id' => 'id']);
    }

    public function getCatByLangId($lang_id)
    {
        return Categories::find()->with('pages')->where(['lang_id' => $lang_id])->asArray()->all();
    }

}
