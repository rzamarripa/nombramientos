<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default" ng-cloak>
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Trabajador*</label>
                        <ui-select name="numeroTrabajador_id" ng-model="nuevo.numeroTrabajador_id" required>
                          <ui-select-match>
                              <span>{{$select.selected.nombre}}</span>
                          </ui-select-match>
                          <ui-select-choices repeat="t.id as t in trabajador | filter: $select.search">
                              <span>{{t.nombre}}</span>
                          </ui-select-choices>
                        </ui-select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Servicio*</label>
                        <ui-select name="servicio_id" ng-model="nuevo.servicio_id" required>
                          <ui-select-match>
                              <span>{{$select.selected.codigo}}</span>
                          </ui-select-match>
                          <ui-select-choices repeat="s.codigo as s in servicio | filter: $select.search">
                              <span>{{s.codigo}}</span>
                          </ui-select-choices>
                        </ui-select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Turno*</label>
                        <ui-select name="turno_id" ng-model="nuevo.turno_id" required>
                          <ui-select-match>
                              <span>{{$select.selected.nombre}}</span>
                          </ui-select-match>
                          <ui-select-choices repeat="t.id as t in turno | filter: $select.search">
                              <span>{{t.nombre}}</span>
                          </ui-select-choices>
                        </ui-select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo del Día*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoDelDia" ng-model="nuevo.periodoDelDia" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo del Mes*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoDelMes" ng-model="nuevo.periodoDelMes" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo del Año*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoDelAnio" ng-model="nuevo.periodoDelAnio" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo al Día*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoAlDia" ng-model="nuevo.periodoAlDia" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo al Mes*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoAlMes" ng-model="nuevo.periodoAlMes" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Periodo al Año*</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="periodoAlAnio" ng-model="nuevo.periodoAlAnio" min="0" max="2147483647" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fecha</label>
                        <input ng-readonly="actualizar" class="form-control" type="date" name="fecha" ng-model="nuevo.fecha">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Oficio</label>
                        <input ng-readonly="actualizar" class="form-control" type="number" name="Oficio" min="0" max="2147483647" ng-model="nuevo.Oficio">
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
