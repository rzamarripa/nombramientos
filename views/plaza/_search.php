<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlazaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plaza-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'numeroPlaza') ?>

    <?= $form->field($model, 'codigoPuesto') ?>

    <?= $form->field($model, 'nivelSubnivel') ?>

    <?= $form->field($model, 'grupoGradoNivelSalarial') ?>

    <?= $form->field($model, 'clasificacion') ?>

    <?php // echo $form->field($model, 'integracionSalarial') ?>

    <?php // echo $form->field($model, 'denominacionPuesto') ?>

    <?php // echo $form->field($model, 'zonaEconomica') ?>

    <?php // echo $form->field($model, 'tipoPlaza') ?>

    <?php // echo $form->field($model, 'ocupacion') ?>

    <?php // echo $form->field($model, 'estatusPlaza') ?>

    <?php // echo $form->field($model, 'tipoTabulador') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
