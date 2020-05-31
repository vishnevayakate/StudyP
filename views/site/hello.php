<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
echo $model->time;
?>

<?php $form = ActiveForm::begin(); ?>


<div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                   <?= $form->field($model, 'time')->textInput() ?>
            </div>
    </div>

    <?php ActiveForm::end(); ?>

