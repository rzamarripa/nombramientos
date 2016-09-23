<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Numero Empleado*</label>
                        <input class="form-control" type="number" name="numeroEmpleado" ng-model="nuevo.numeroEmpleado"  required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nombre*</label>
                        <input class="form-control" type="text" name="nombre" ng-model="nuevo.nombre" maxlength="200" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>RFC</label>
                        <input class="form-control" type="text" name="rfc" ng-model="nuevo.RFC"  maxlength="20">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>CURP</label>
                        <input class="form-control" type="text" name="curp" ng-model="nuevo.CURP"  maxlength="30">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sexo</label>
                        <input class="form-control" type="text" name="sexo" ng-model="nuevo.sexo" maxlength="10">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>CUIP</label>
                        <input class="form-control" type="text" name="cuip" ng-model="nuevo.CUIP"  maxlength="40">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nacionalidad</label>
                        <input class="form-control" type="text" name="nacionalidad" ng-model="nuevo.nacionalidad"  maxlength="20">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Numero de Hijos</label>
                        <input class="form-control" type="number" name="numeroHijos" ng-model="nuevo.numeroHijos">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Escolaridad</label>
                        <input class="form-control" type="text" name="escolaridad" ng-model="nuevo.escolaridad" maxlength="10">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Cedula Profecional</label>
                        <input class="form-control" type="text" name="cedulaProfesional" ng-model="nuevo.cedulaProfesional" maxlength="10">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Domicilio</label>
                        <input class="form-control" type="text" name="domicilio" ng-model="nuevo.domicilio"  maxlength="200">
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