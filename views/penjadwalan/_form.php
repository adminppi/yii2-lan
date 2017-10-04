<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penjadwalan */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="penjadwalan-form">

    <?php $form = ActiveForm::begin([
        'layout'=>'horizontal',
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'label' => 'col-sm-2',
                'wrapper' => 'col-sm-4',
                'error' => '',
                'hint' => '',
            ],
        ]
    ]); ?>

    <?= $form->field($model, 'id_diklat')->dropDownList(\app\models\Diklat::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_widyaiswara')->dropDownList(\app\models\Widyaiswara::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'tanggal_mulai')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?= $form->field($model, 'tanggal_selesai')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?= $form->field($model, 'materi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
