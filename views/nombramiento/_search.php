<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrabajadoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'numeroEmpleado') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'RFC') ?>

    <?= $form->field($model, 'CURP') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'CUIP') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'numeroHijos') ?>

    <?php // echo $form->field($model, 'escolaridad') ?>

    <?php // echo $form->field($model, 'cedulaProfesional') ?>

    <?php // echo $form->field($model, 'domicilio') ?>

    <?php // echo $form->field($model, 'estatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
