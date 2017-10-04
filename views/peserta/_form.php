<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="peserta-form">

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

    <?= $form->field($model, 'id_instansi')->dropDownList(\app\models\Instansi::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_kelamin')->dropDownList(\app\models\JenisKelamin::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_pangkat_golongan')->dropDownList(\app\models\PangkatGolongan::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis_diklat')->dropDownList(\app\models\JenisDiklat::getList(), ['prompt' => '- Pilih -']); ?>

    <?= $form->field($model, 'id_diklat')->dropDownList(\app\models\Diklat::getList(), ['prompt' => '- Pilih -']); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
                <?= Html::submitButton('<i class="glyphicon glyphicon-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
