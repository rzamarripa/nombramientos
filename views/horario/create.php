<?php

use yii\helpers\Html;

$this->title = 'Crear Horario';
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'horario';
	window.action = 'create';
</script>

<div ng-controller="UniversalCtrl">
  <h1><?= Html::encode($this->title) ?></h1>
  <hr>
  <?= $this->render('_form', [
      'model' => $model,
  ]) ?>
</div>
