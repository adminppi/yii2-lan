<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penjadwalan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penjadwalan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjadwalan-view">

    <h1>Detail Penjadwalan</h1>

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
                'attribute' => 'id_diklat',
                'format' => 'raw',
                'value' => $model->id_diklat,
            ],
    
            [
                'attribute' => 'id_widyaiswara',
                'format' => 'raw',
                'value' => $model->id_widyaiswara,
            ],
    
            [
                'attribute' => 'tanggal_mulai',
                'format' => 'raw',
                'value' => $model->tanggal_mulai,
            ],
    
            [
                'attribute' => 'tanggal_selesai',
                'format' => 'raw',
                'value' => $model->tanggal_selesai,
            ],
    
            [
                'attribute' => 'materi',
                'format' => 'raw',
                'value' => $model->materi,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penjadwalan', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
