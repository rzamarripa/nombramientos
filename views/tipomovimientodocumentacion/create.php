<?php

use yii\helpers\Html;

$this->title = 'Crear Tipo Movimiento Documentación';
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'tipomovimientodocumentacion';
	window.action = 'create';
	window.tiposMovimiento = <?= json_encode($tiposMovimiento) ?>;
</script>

<div ng-controller="UniversalCtrl">
  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <?= $this->render('_form', [
      'model' => $model,
  ]) ?>
</div>
