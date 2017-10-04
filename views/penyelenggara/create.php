<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penyelenggara */

$this->title = 'Tambah Penyelenggara';
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyelenggara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
