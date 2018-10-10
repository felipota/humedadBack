<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtmosphereHistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atmosphere-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'humidity') ?>

    <?= $form->field($model, 'pressure') ?>

    <?= $form->field($model, 'rising') ?>

    <?= $form->field($model, 'visibility') ?>

    <?php // echo $form->field($model, 'fecha_consulta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
