<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Biodata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttl')->textInput() ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'laki-laki' => 'Laki-laki', 'perempuan' => 'Perempuan', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hobi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
