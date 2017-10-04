<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Widyaiswara */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Widyaiswara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widyaiswara-view">

    <h1>Detail Widyaiswara</h1>

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
                'attribute' => 'nip',
                'format' => 'raw',
                'value' => $model->nip,
            ],
    
            [
                'attribute' => 'id_pangkat_golongan',
                'format' => 'raw',
                'value' => $model->id_pangkat_golongan,
            ],
    
            [
                'attribute' => 'id_jenjang_widyaiswara',
                'format' => 'raw',
                'value' => $model->id_jenjang_widyaiswara,
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
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Widyaiswara', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>
</div>
