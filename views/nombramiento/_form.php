<?php
    use yii\helpers\Html;
?>
<form name="form" novalidate>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading"><center><strong>Número de Control</strong></center></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Folio*</label>
                            <input class="form-control" type="number" name="folio" ng-model="nuevo.folio"  required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Quincena*</label>
                            <input class="form-control" type="number" name="quincena" ng-model="nuevo.quincena"  required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Año*</label>
                            <input class="form-control" type="number" name="anio" ng-model="nuevo.anio"  required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading"><center><strong>Datos del Trabajador</strong></center></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>No. de Empleado*</label>
                            <ui-select name="numeroEmpleado_id" ng-model="nuevo.numeroEmpleado_id" required>
                              <ui-select-match>
                                  <span>{{'[' + $select.selected.numeroEmpleado + '] - ' + $select.selected.nombre}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="trabajador in trabajadores | filter: $select.search">
                                  <span>{{'[' + trabajador.numeroEmpleado + '] - ' + trabajador.nombre}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading"><center><strong>Tipo de Movimiento</strong></center></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Tipo de Movimiento*</label>
                            <ui-select name="tipoMovimiento_id" ng-model="nuevo.tipoMovimiento_id" required>
                              <ui-select-match>
                                  <span>{{'[' + $select.selected.codigo + '] - ' + $select.selected.tipoMovimiento}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="tm in tipoMovimiento | filter: $select.search">
                                  <span>{{'[' + tm.codigo + '] - ' + tm.tipoMovimiento}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><center><strong>Datos de la Plaza</strong></center></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>No. de Plaza*</label>
                            <ui-select name="numeroPlaza_id" ng-model="nuevo.numeroPlaza_id" required>
                              <ui-select-match>
                                  <span>{{$select.selected.numeroPlaza}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="p in plaza | filter: $select.search">
                                  <span>{{p.numeroPlaza}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Unidad Administrativa*</label>
                            <ui-select name="unidadAdministrativa_id" ng-model="nuevo.unidadAdministrativa_id" required>
                              <ui-select-match>
                                  <span>{{$select.selected.codigo}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="ua in unidadAdministrativa | filter: $select.search">
                                  <span>{{ua.codigo}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Adscripción Presupuestal*</label>
                            <ui-select name="adscripcionPresupuestal_id" ng-model="nuevo.adscripcionPresupuestal_id" required>
                              <ui-select-match>
                                  <span>{{$select.selected.codigo}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="ap in adscripcionPresupuestal | filter: $select.search">
                                  <span>{{ap.codigo}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Adscripción Fisica*</label>
                            <ui-select name="adscripcionFisica_id" ng-model="nuevo.adscripcionFisica_id" required>
                              <ui-select-match>
                                  <span>{{$select.selected.codigo}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="af in adscripcionFisica | filter: $select.search">
                                  <span>{{af.codigo}}</span>
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
                              <ui-select-choices repeat="s in servicio | filter: $select.search">
                                  <span>{{s.codigo}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Horario*</label>
                            <ui-select name="horario_id" ng-model="nuevo.horario_id" required>
                              <ui-select-match>
                                  <span>{{$select.selected.codigo}}</span>
                              </ui-select-match>
                              <ui-select-choices repeat="h in horario | filter: $select.search">
                                  <span>{{h.codigo}}</span>
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
                              <ui-select-choices repeat="t in turno | filter: $select.search">
                                  <span>{{t.nombre}}</span>
                              </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                </div>
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