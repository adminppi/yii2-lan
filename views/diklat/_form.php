<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diklat */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="diklat-form">

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

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_diklat')->dropDownList(\app\models\JenisDiklat::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?= $form->field($model, 'tanggal_pelaksanaan')->widget(\yii\jui\DatePicker::className(), [
            'dateFormat'=>'yyyy-MM-dd',
            'options' => [
            'class' => 'form-control'
        ]
    ]); ?>

    <?php /*
    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>
    */ ?>

    <?= $form->field($model, 'lokasi')->dropDownList(['Bandung'=>'Bandung','Jakarta'=>'Jakarta'], ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'jumlah_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_penyelenggara')->dropDownList(\app\models\Penyelenggara::getList(), ['prompt' => '- Pilih -']); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
