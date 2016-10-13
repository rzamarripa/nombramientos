<?php

use yii\helpers\Html;

$this->title = 'Crear Plantilla Real';
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'plantillareal';
	window.action = 'create';
	window.trabajador = <?= json_encode($trabajador) ?>;
	window.servicio = <?= json_encode($servicio) ?>;
	window.turno = <?= json_encode($turno) ?>;
</script>

<div ng-controller="UniversalCtrl">
  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <?= $this->render('_form') ?>
</div>
