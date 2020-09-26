<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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
    /*
    NavBar::begin([
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
    NavBar::end();
    */
    ?>

    <div class="col-lg-6">
        <div class="row main-nav">
            <div class="col-lg-6">
                <img src="/images/pills-img.png" alt="pill" id="pills">
            </div>
            <div class="col-lg-6">
                <div class="col-lg-2">
                     <b>Speaker Portal</b>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-6">
        <div class="row main-nav">
            <div class="col-lg-8">
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                English
                            </div>
                            <div class="col-lg-4">
                                Contact
                            </div>
                            <div class="col-lg-4">
                                Sitemap
                            </div>
                        </div>
                    </div>              

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <b>My Collection</b>
                            </div>
                            <div class="col-lg-6">
                                <?= Html::beginForm(['/site/logout'], 'post') ?>
                                <?=Html::submitButton("Logout") ?>
                                <?= Html::endForm() ?>

                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <img src="/images/logo.png" alt="logo">

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <ul class="sub-nav">
    
            <li>
                <a> Home </a>
            </li>
            <li>
                <a> MPAF </a>
            </li>
            </li>
            <li>
                <a> Venous </a>
            </li>
            </li>
            <li>
                <a> ACS </a>
            </li>
            </li>
            <li>
                <a> KIVAMOXOBAN STUDIES </a>
            </li>
            <li>
                <a> BACKGROUND INFORMATION </a>
            </li>
        </ul>
    </div>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
