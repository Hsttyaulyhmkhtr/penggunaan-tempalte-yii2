<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BiodataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'ttl') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?php // echo $form->field($model, 'nim') ?>

    <?php // echo $form->field($model, 'hobi') ?>

    <?php // echo $form->field($model, 'telp') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
