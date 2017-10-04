<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Diklat */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Diklat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diklat-view">

    <h1>Detail Diklat</h1>

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [

            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
    
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
    
            [
                'attribute' => 'id_jenis_diklat',
                'format' => 'raw',
                'value' => $model->id_jenis_diklat,
            ],
    
            [
                'attribute' => 'tanggal_pendaftaran',
                'format' => 'raw',
                'value' => $model->tanggal_pendaftaran,
            ],
    
            [
                'attribute' => 'tanggal_pelaksanaan',
                'format' => 'raw',
                'value' => $model->tanggal_pelaksanaan,
            ],
    
            [
                'attribute' => 'lokasi',
                'format' => 'raw',
                'value' => $model->lokasi,
            ],
    
            [
                'attribute' => 'id_penyelenggara',
                'format' => 'raw',
                'value' => $model->id_penyelenggara,
            ],
    
        ],
    ]) ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-trash"></i> Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin akan menghapus data?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Diklat', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
