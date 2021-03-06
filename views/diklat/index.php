<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiklatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diklat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diklat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Diklat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            /*
            [
                'attribute' => 'id',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id;
                }
            ],
            */
        
            [
                'attribute' => 'nama',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->nama;
                }
            ],
        
            [
                'attribute' => 'id_jenis_diklat',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_jenis_diklat;
                }
            ],
        
            [
                'attribute' => 'tanggal_pendaftaran',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->tanggal_pendaftaran;
                }
            ],
        
            [
                'attribute' => 'tanggal_pelaksanaan',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->tanggal_pelaksanaan;
                }
            ],
        
            /*
            [
                'attribute' => 'lokasi',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->lokasi;
                }
            ],
            */
        
            /*
            [
                'attribute' => 'id_penyelenggara',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center'],
                'value' => function($data) {
                    return $data->id_penyelenggara;
                }
            ],
            */
        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
