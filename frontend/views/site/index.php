<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Главная';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row blocks">
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Работа магазина</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Поиск чека')?></li>
                        <li><?=Html::a('Операционный день')?></li>
                        <li><?=Html::a('Главная касса')?></li>
                        <li><?=Html::a('Прием цен')?></li>
                        <li><?=Html::a('Ценники ТСД')?></li>
                    </ul>
                    <?//=Html::img('@web/img/cart.png', ['alt' => 'cart'])?>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Справочники</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Товары')?></li>
                        <li><?=Html::a('Магазины')?></li>
                        <li><?=Html::a('Покупатели')?></li>
                        <li><?=Html::a('Базовые справочники')?></li>
                        <li><?=Html::a('Шаблоны ввода')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Маркетинг</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Скидки')?></li>
                        <li><?=Html::a('Программы лоялоьности')?></li>
                        <li><?=Html::a('Подарочные сертификаты')?></li>
                        <li><?=Html::a('Суммовые купоны')?></li>
                        <li><?=Html::a('Дисконтные карты')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Настройка магазина</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Описание')?></li>
                        <li><?=Html::a('Интеграция')?></li>
                        <li><?=Html::a('Операционные настройки')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Настройка сервера и оборудования</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Оборудование')?><a h</li>
                        <li><?=Html::a('Конвертеры')?></li>
                        <li><?=Html::a('Настройка обмена с СГО')?></li>
                        <li><?=Html::a('Дизайн печатных форм')?></li>
                        <li><?=Html::a('Удаление чеков')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Администрирование</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Персонал')?></li>
                        <li><?=Html::a('Монитор оборудования')?></li>
                        <li><?=Html::a('Ручная загрузка')?></li>
                        <li><?=Html::a('Управление службами')?></li>
                        <li><?=Html::a('Лицензия')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 col-md-3 block">
                <div class="title"><h3>Отчеты</h3></div>
                <div class="block-main">
                    <ul>
                        <li><?=Html::a('Аналитика')?></li>
                        <li><?=Html::a('Заказные отчеты')?></li>
                        <li><?=Html::a('Кейтеринг')?></li>
                        <li><?=Html::a('Устаревшее')?></li>
                    </ul>
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
