<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Codigo*</label>
                        <input class="form-control" type="text" name="codigo" ng-model="nuevo.codigo" maxlength="15"  required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nivel*</label>
                        <input class="form-control" type="text" name="nivel" ng-model="nuevo.nivel" maxlength="15" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Denominación*</label>
                        <input class="form-control" type="text" name="denominacion" ng-model="nuevo.denominacion"  maxlength="100" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sueldo ZEII*</label>
                        <input class="form-control float-input" type="text" name="sueldoZEII" ng-model="nuevo.sueldoZEII" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Compensación ZEII*</label>
                        <input class="form-control float-input" type="text" name="compensacionZEII" ng-model="nuevo.compensacionZEII" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Total ZEII*</label>
                        <input class="form-control float-input" type="text" name="totalZEII" ng-model="nuevo.totalZEII" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sueldo ZEIII*</label>
                        <input class="form-control float-input" type="text" name="sueldoZEIII" ng-model="nuevo.sueldoZEIII" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Compensación ZEIII*</label>
                        <input class="form-control float-input" type="text" name="compensacionZEIII" ng-model="nuevo.compensacionZEIII" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Total ZEIII*</label>
                        <input class="form-control float-input" type="text" name="totalZEIII" ng-model="nuevo.totalZEIII" required>
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