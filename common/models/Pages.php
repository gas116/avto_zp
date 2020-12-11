<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $title
 * @property int $lang_id
 * @property int $hide
 * @property int $cat_id
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'lang_id', 'hide', 'cat_id'], 'required'],
            [['lang_id', 'hide', 'cat_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'lang_id' => 'Lang ID',
            'hide' => 'Hide',
            'cat_id' => 'Cat ID',
        ];
    }

    public function getLanguages(){
        return $this->hasOne(Languages::class, ['lang_id' => 'id']);
    }

    public function getCategories(){
        return $this->hasOne(Categories::class, ['cat_id' => 'id']);
    }

    public function getPagesByLangId($lang_id){
        $page = Pages::find()->where([ 'lang_id' => $lang_id ])->orderBy('cat_id')->asArray()->all();
        $cnt=1;
        foreach ($page as $k => $v)
        {
            if($v['cat_id'] == $cnt){
                $res[$cnt][$k]['title'] = $v['title'];
            }
            else{
                $cnt++;
                $res[$cnt][$k]['title'] = $v['title'];
            }
        }
        return $res;
    }
}
