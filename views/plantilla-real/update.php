<?php
	use yii\helpers\Html;
	$this->title = 'Acutalizar: ' . $model->id;
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'plantilla-real';
	window.action = 'actualizar';
	window.nuevo = <?= json_encode($model->attributes) ?>;
	window.trabajador = <?= json_encode($trabajador) ?>;
	window.turno = <?= json_encode($turno) ?>;
	window.servicio = <?= json_encode($servicio) ?>;
</script>
<div ng-controller="UniversalCtrl">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form') ?>
</div>