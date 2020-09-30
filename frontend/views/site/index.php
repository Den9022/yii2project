<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <div class="row list-container">

                <div class="col-lg-6">
                    <ul id="dark" class="column left-column sortable">
                        <?php foreach ($dark_items as $item) : ?>
                            <li class="element dark-element">
                                <?php echo $item->name; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="light" class="column right-column sortable">
                        <?php foreach ($light_items as $item) : ?>
                            <li class="element light-element">
                                <?php echo $item->name; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-5">
                <?= Html::beginForm(['/site/update'], 'post') ?>
                <?= Html::hiddenInput('dark', ""); ?>
                <?= Html::hiddenInput('light', ""); ?>
                <?= Html::submitButton('Save', ['class' => 'my-button', 'id' => 'save-order']) ?>
                <?= Html::endForm() ?>
            </div>

        </div>
    </div>

</div>