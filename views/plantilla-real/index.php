<?php
    use yii\helpers\Html;
    $this->title = 'Plantillas Reales';
?>
<div class="panel panel-default">
  <div class="panel-heading">                                
        <div class="row-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        <i class="icofont icofont-list icon-title"><?= Html::encode($this->title) ?></i>
                        <?= Html::a('Crear Plantilla Real', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
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
                            <th>No.</th>
                            <th>Trabajador</th>
                            <th>Turno</th>
                            <th>Servicio</th>
                            <th>Fecha</th>
                            <th>Oficio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $r) {?>
                            <tr>
                                <td><?= $r->id ?></td>
                                <td><?= $r->trabajador->nombre ?></td>
                                <td><?= $r->turno->nombre ?></td>
                                <td><?= $r->servicio->denominacion ?></td>
                                <td><?= $r->fecha ?></td>
                                <td><?= $r->Oficio ?></td>
                                <td align="center"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>