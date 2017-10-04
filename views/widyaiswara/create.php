<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Widyaiswara */

$this->title = 'Tambah Widyaiswara';
$this->params['breadcrumbs'][] = ['label' => 'Widyaiswara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widyaiswara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
