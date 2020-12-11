<?php

namespace common\models\b2b\b2b;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Connection;

class Points extends ActiveRecord
{
    public static function getDB(){
        return \Yii::$app->db1;
    }

    public static function tableName(){
        return 'point';
    }
}