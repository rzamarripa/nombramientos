<?php
	use yii\helpers\Html;
	$this->title = 'Acutalizar: ' . $model->id;
?>
<script type="text/javascript">
	window.base_url = '<?= Yii::$app->request->baseUrl ?>';
	window.controller = 'tipopuesto';
	window.action = 'actualizar';
	window.nuevo = <?= json_encode($model->attributes) ?>;
</script>
<div ng-controller="UniversalCtrl">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>