<?php
    use yii\helpers\Html;
    $this->title = 'Turnos';
?>
<div class="panel panel-default">
    <div class="panel-heading">                                
        <div class="row-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        <i class="icofont icofont-eclipse icon-title"><?= Html::encode($this->title) ?></i>
                        <?= Html::a('Crear Turno', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
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
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($registros as $r) {?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $r->nombre ?></td>
                                <td align="center"><?= Html::a('<i class="icofont icofont-pencil-alt-5"><i>', ['update','id'=>$r->id], ['class' => 'btn btn-primary pull-right']) ?></td>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>