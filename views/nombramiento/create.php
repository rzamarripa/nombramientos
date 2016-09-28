<?php

use yii\helpers\Html;

$this->title = 'Crear Nombramiento';
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'nombramiento';
	window.action = 'create';
	window.trabajadores = <?= json_encode($trabajadores) ?>;
	window.tipoMovimiento = <?= json_encode($tipoMovimiento) ?>;
	window.plaza = <?= json_encode($plaza) ?>;
	window.unidadAdministrativa = <?= json_encode($unidadAdministrativa) ?>;
	window.adscripcionPresupuestal = <?= json_encode($adscripcionPresupuestal) ?>;
	window.adscripcionFisica = <?= json_encode($adscripcionFisica) ?>;
	window.servicio = <?= json_encode($servicio) ?>;
	window.turno = <?= json_encode($turno) ?>;
	window.horario = <?= json_encode($horario) ?>;
</script>

<div ng-controller="NombramientoCtrl">
  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <?= $this->render('_form', [
      'model' => $model,
  ]) ?>
</div>
