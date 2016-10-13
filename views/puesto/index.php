<?php
	use yii\helpers\Html;
	$this->title = 'Puesto';
?>

<div class="panel panel-default">
  <div class="panel-heading">                                
      <div class="row-fluid">
				<div class="row">
					<div class="col-sm-12">
						<h2>
						<i class="icofont icofont icofont-company icon-title"><?= Html::encode($this->title) ?></i><?= Html::a('Crear Puesto', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
						</h2>
					</div>
				</div>
      </div>
  </div>
  <div class="panel-body">
  	<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped table-bordered table-hover datatable">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nivel</th>
							<th>Denominación</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($registros as $r) {?>
							<tr>
								<td><?= $r->codigo ?></td>
								<td><?= $r->nivel ?></td>
								<td><?= $r->denominacion ?></td>
								<td align="center"><?= Html::a('<i class="icofont icofont-pencil-alt-5"><i>', ['update','id'=>$r->id], ['class' => 'btn btn-primary pull-right']) ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
  </div>
</div>
