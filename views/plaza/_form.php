<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Numero de Plaza*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="numeroPlaza" ng-model="nuevo.numeroPlaza"  required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Codigo del Puesto*</label>
                        <input class="form-control" type="text" name="codigoPuesto" ng-model="nuevo.codigoPuesto" maxlength="20" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nivel Subnivel*</label>
                        <input class="form-control" type="text" name="nivelSubnivel" ng-model="nuevo.nivelSubnivel"  maxlength="5" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nivel Salarial*</label>
                        <input class="form-control" type="text" name="grupoGradoNivelSalarial" ng-model="nuevo.grupoGradoNivelSalarial"  maxlength="10" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Clasificación*</label>
                        <input class="form-control" type="number" name="clasificacion" ng-model="nuevo.clasificacion" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Integracion Salarial*</label>
                        <input class="form-control" type="number" name="integracionSalarial" ng-model="nuevo.integracionSalarial" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Denominacion del Puesto*</label>
                        <input class="form-control" type="text" name="denominacionPuesto" ng-model="nuevo.denominacionPuesto"  maxlength="100" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Zona Economica*</label>
                        <input class="form-control" type="number" name="zonaEconomica" ng-model="nuevo.zonaEconomica" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tipo de Plaza*</label>
                        <input class="form-control" type="text" name="tipoPlaza" ng-model="nuevo.tipoPlaza" maxlength="1" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Ocupación*</label>
                        <input class="form-control" type="text" name="ocupacion" ng-model="nuevo.ocupacion" maxlength="100" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tipo Tabulador*</label>
                        <input class="form-control" type="text" name="tipoTabulador" ng-model="nuevo.tipoTabulador"  maxlength="1" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-primary pull-right" ng-click="guardar(nuevo, form, $event)" valida-form formulario="form">
                        <span ng-show="loading"><i class="fa fa-spinner fa-pulse"></i></span>
                        Guardar
                    </button>
                    <?= Html::a( 'Regresar', Yii::$app->request->referrer, ['class'=>'btn btn-success pull-left']); ?>
                </div>
            </div>
        </form>
    </div>
</div>