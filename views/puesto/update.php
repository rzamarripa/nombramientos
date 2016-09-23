<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajadores */

$this->title = 'Acutalizar: ' . $model->id;
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'puesto';
	window.action = 'actualizar';
	window.nuevo = <?= json_encode($model->attributes); ?>;
	window.nuevo.tipoPuesto_id = window.nuevo.tipoPuesto_id.toString();
	window.tiposPuesto = <?= json_encode($tiposPuesto); ?>;
</script>
<div ng-controller="UniversalCtrl">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
