<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <div class="row list-container">

                <div class="col-lg-6">
                    <ul id="sortable" class="column left-column">
                        <?php foreach($dark_items as $item): ?>
                            <li class="element dark-element">
                                <?php echo $item->name; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="column right-column">
                        <?php foreach($light_items as $item): ?>
                            <li class="element light-element">
                                <?php echo $item->name; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-5">
                <?= Html::submitButton('Save', ['class' => 'my-button', 'id' => 'save-order']) ?>
            </div>
        </div>
    </div>

</div>
