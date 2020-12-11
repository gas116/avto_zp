<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$ru = Url::to('@web/img/rus.png');
$ua = Url::to('@web/img/ua.png');
$session = Yii::$app->session;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    /*NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-3 logo">
                    <a href="<?= Url::home(true)?>"><?= Html::img('@web/img/logo.png', ['alt' => 'logo']);?></a>
                </div>
                <div class="col-xs-6 col-md-7">
                    <div class="row">
                        <div class="col-xs-6 col-md-5 contact">
                            <div class="phone">Техподдержка: <span><?=Yii::$app->params['phone_kievstar']?></span></div>
                            <div class="mail">E-mail: <span><?=Yii::$app->params['email_company']?></span></div>
                        </div>
                        <div class="col-xs-6 col-md-4 form-search">
                            <form class="form-inline">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="Поиск">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6 col-md-2 sec-lang">
                            <select id="lang">
                                <?php if ($session->has('language')): ?>
                                <option selected value="ua"><?php $session->get('language'); ?></option>
                                <?php $lang2 = $session->get('language') == 'UA' ? 'RU' : 'UA' ?>
                                <option value="ru"><?=$lang2?></option>
                                <?php else: ?>
                                    <option selected value="ua">UA</option>
                                    <option value="ru">RU</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-2 sec-users">
                    <p class="user">Вы вошли как: <span><?=Yii::$app->user->identity->username?></span></p>
                    <p class="link-exit">Выйти</p>
                </div>
            </div>
        </div>
    </header>

    <section class="main">
        <div class="inner-main">
            <div class="container">

                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </section>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php
$script = <<< JS
    $(function () {
        
    });
JS;
$this->registerJs($script);
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
