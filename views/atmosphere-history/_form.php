<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtmosphereHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atmosphere-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'humidity')->textInput() ?>

    <?= $form->field($model, 'pressure')->textInput() ?>

    <?= $form->field($model, 'rising')->textInput() ?>

    <?= $form->field($model, 'visibility')->textInput() ?>

    <?= $form->field($model, 'fecha_consulta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
