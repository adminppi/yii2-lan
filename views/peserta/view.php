<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Peserta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-view">

    <h1>Detail Peserta</h1>

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
                'attribute' => 'id_instansi',
                'format' => 'raw',
                'value' => $model->id_instansi,
            ],
    
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
    
            [
                'attribute' => 'nip',
                'format' => 'raw',
                'value' => $model->nip,
            ],
    
            [
                'attribute' => 'id_jenis_kelamin',
                'format' => 'raw',
                'value' => $model->id_jenis_kelamin,
            ],
    
            [
                'attribute' => 'id_pangkat_golongan',
                'format' => 'raw',
                'value' => $model->id_pangkat_golongan,
            ],
    
            [
                'attribute' => 'jabatan',
                'format' => 'raw',
                'value' => $model->jabatan,
            ],
    
            [
                'attribute' => 'id_jenis_diklat',
                'format' => 'raw',
                'value' => $model->id_jenis_diklat,
            ],
    
            [
                'attribute' => 'id_diklat',
                'format' => 'raw',
                'value' => $model->id_diklat,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Peserta', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
