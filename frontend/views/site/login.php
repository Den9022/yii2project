<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login">

    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="card card-signin">
                <div class="card-body">
                    <h5 class="card-title">Please Sign In</h5>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="form-label-group">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, ['id' => 'inputUsername']]) ?>
                    </div>

                    <div class="form-label-group">
                        <?= $form->field($model, 'password')->passwordInput(['id' => 'inputPassword']) ?>

                    </div>
                    <div class="text-center">
                        <?= Html::submitButton('Enter', ['class' => 'my-button', 'name' => 'login-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>