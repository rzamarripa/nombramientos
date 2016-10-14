<?php

use yii\helpers\Html;

$this->title = 'Crear Unidad Administrativa';
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'unidad-administrativa';
	window.action = 'create';
</script>

<div ng-controller="UniversalCtrl">
  <h2>
    <i class="icofont icofont-unity-hand icon-title"><?= Html::encode($this->title) ?></i>
  </h2>
  <hr>
  <?= $this->render('_form', [
      'model' => $model,
  ]) ?>
</div>
