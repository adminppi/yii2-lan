<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Widyaiswara */

$this->title = 'Sunting Widyaiswara';
$this->params['breadcrumbs'][] = ['label' => 'Widyaiswara', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="widyaiswara-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div>&nbsp;</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
