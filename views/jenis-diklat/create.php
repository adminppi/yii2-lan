<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisDiklat */

$this->title = 'Tambah Jenis Diklat';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Diklat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-diklat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
