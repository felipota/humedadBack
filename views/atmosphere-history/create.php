<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AtmosphereHistory */

$this->title = 'Create Atmosphere History';
$this->params['breadcrumbs'][] = ['label' => 'Atmosphere Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atmosphere-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
