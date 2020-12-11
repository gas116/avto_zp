<?php


namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\base\Security;

class MainController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function deb($arr, $param = 0)
    {
        if($param == 0)
            echo '<pre style="background: #eee">' .print_r($arr, true). '</pre>';
        else
            echo '<span style="background: #eee">' .var_dump($arr). '</span>';
    }

    public function getTimestamp($time)
    {
        $date = date_parse($time);
        $timestamp = mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);

        return $timestamp;
    }

    public function getFlash ($key, $mess)
    {
        Yii::$app->session->setFlash($key, $mess);
    }

    public function getTimestampByCurrentDay()
    {
        $now_year = date('Y');
        $now_month = date('m');
        $now_day = date('d');
        return $this->getTimestamp("{$now_year}-{$now_month}-{$now_day} 00:00:00");
    }
}