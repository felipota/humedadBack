<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtmosphereHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atmosphere Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atmosphere-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Atmosphere History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'humidity',
            'pressure',
            'rising',
            'visibility',
            //'fecha_consulta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
