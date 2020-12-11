<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

//use common\models\b2b\b2b\Points;



/**
 * Site controller
 */
class SiteController extends MainController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->addRule();
        return $this->render('index');
    }

    protected function addRule()
    {
        $auth = Yii::$app->authManager;
        $rule = new \common\rules\AdminRule();
        $auth->add($rule);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionCompanies()
    {
        $my_class = '\common\models\b2b\b2b\Points';
        $my_class::getDB();
        $clients_mhp = $my_class::find()->select(['name_point'])->where(['post' => 1])->andWhere(['cli_group_number' => 2])->asArray()->all();
        $clients_b2b = $my_class::find()->select(['name_point'])->where(['post' => 1])->andWhere(['cli_group_number' => 7])->asArray()->all();
        return $this->render('companies', compact('clients_mhp', 'clients_b2b'));
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
