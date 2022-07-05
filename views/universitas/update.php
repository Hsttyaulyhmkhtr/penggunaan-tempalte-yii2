<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Universitas */

$this->title = 'Update Universitas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Universitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="universitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
