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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">

        <div class="col-lg-6">
            <div class="row main-nav">
                <div class="col-lg-6">
                    <img src="/images/pills-img.png" alt="pill" id="pills">
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-2 speaker-portal">
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
                            <div class="row pull-right">
                                <div class="col-lg-4">
                                    <p>
                                        <nobr>English <i class="fas fa-angle-down"></i>
                                            <nobr>
                                    </p>
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
                            <div class="row pull-right">
                                <div class="col-lg-6">
                                    <i class="fas fa-folder"></i><b> My Collection</b>
                                </div>
                                <div class="col-lg-6">
                                    <?php if (!Yii::$app->user->isGuest) : ?>

                                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                                        <?= Html::submitButton("<i class='fas fa-times-circle'></i> Logout", ['class' => 'logout-button']) ?>
                                        <?= Html::endForm() ?>

                                    <?php endif; ?>
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
        <div class="col-lg-12 sub-nav-div">
            <ul class="sub-nav">

                <li>
                    <a> <i class="fas fa-home"></i> </a>
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
            <?= $content ?>
            <?= Alert::widget() ?>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">Conditions of use | Privacy statement | Imprint</p>

            <p class="pull-right">This site is intended to provide information to an internation audience outside USA and UK.</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>