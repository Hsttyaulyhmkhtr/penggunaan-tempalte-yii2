<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Info */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kucing')->textInput() ?>

    <?= $form->field($model, 'umur_kucing')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
