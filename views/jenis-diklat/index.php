<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisDiklatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Diklat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-diklat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Jenis Diklat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],



            [
                'attribute' => 'id',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id;
                }
            ],
        
            [
                'attribute' => 'nama',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->nama;
                }
            ],
        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
