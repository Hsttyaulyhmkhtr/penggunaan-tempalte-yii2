<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Universitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kampus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_kampus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agreditas_kampus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
