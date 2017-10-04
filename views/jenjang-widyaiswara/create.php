<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenjangWidyaiswara */

$this->title = 'Tambah Jenjang Widyaiswara';
$this->params['breadcrumbs'][] = ['label' => 'Jenjang Widyaiswara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenjang-widyaiswara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
