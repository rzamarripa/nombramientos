<?php
    use yii\helpers\Html;
    $this->title = 'Unidadades Administrativas';
?>
<div class="panel panel-default">
    <div class="panel-heading">                                
        <div class="row-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        <i class="icofont icofont-unity-hand icon-title"><?= Html::encode($this->title) ?></i>
                        <?= Html::a('Crear Unidad Administrativa', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
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
                            <th>Código</th>
                            <th>Denominación</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $r) {?>
                            <tr>
                                <td><?= $r->codigo ?></td>
                                <td><?= $r->denominacion ?></td>
                                <td align="center"><?= Html::a('<i class="icofont icofont-pencil-alt-5"><i>', ['update','id'=>$r->codigo], ['class' => 'btn btn-primary pull-right']) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>