<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penyelenggara */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyelenggara-view">

    <h1>Detail Penyelenggara</h1>

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
                'attribute' => 'alamat',
                'format' => 'raw',
                'value' => $model->alamat,
            ],
    
            [
                'attribute' => 'email',
                'format' => 'raw',
                'value' => $model->email,
            ],
    
            [
                'attribute' => 'telepon',
                'format' => 'raw',
                'value' => $model->telepon,
            ],
    
            [
                'attribute' => 'nama_pic',
                'format' => 'raw',
                'value' => $model->nama_pic,
            ],
    
            [
                'attribute' => 'telepon_pic',
                'format' => 'raw',
                'value' => $model->telepon_pic,
            ],
    
            [
                'attribute' => 'email_pic',
                'format' => 'raw',
                'value' => $model->email_pic,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penyelenggara', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
