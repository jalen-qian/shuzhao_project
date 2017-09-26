<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
//<!-- style="background: url(/frontend/web/img/bg2.jpg) no-repeat fixed; background-size: 100%"-->
?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel'  => '<img class="header-logo" src="/frontend/web/img/logo.jpeg" />',
        'brandOptions'=> ['style'=>'color:yellow;font-size:23px;padding:0;'],
        'brandUrl'    => Yii::$app->homeUrl,
        'options'     => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '痴人说梦', 'url' => ['/post/index']],
        ['label' => '梦笔生花', 'url' => ['/post/create']],
        ['label' => '云梦闲情', 'url' => ['/site/contact']],
        ['label' => '梦断魂劳', 'url' => ['/site/contact']],
        ['label' => '黄粱美梦', 'url' => ['/site/contact']],
        ['label' => '槐南一梦', 'url' => ['/site/contact']],
        ['label' => '丹漆随梦', 'url' => ['/site/contact']],
        ['label' => '鹏游蝶梦', 'url' => ['/site/contact']],
        ['label' => '大梦方醒', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items'   => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" >
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 庄周梦蝶v1.0 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
