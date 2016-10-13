<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default" ng-cloak>
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
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Turno Opcional</label>
                        <input class="form-control float-input" type="text" name="turnoOpcional" ng-model="nuevo.turnoOpcional">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Percepción Adicional</label>
                        <input class="form-control float-input" type="text" name="percepcionOpcional" ng-model="nuevo.percepcionAdicional">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Riesgo Profesional</label>
                        <input class="form-control float-input" type="text" name="riesgoProfesional" ng-model="nuevo.riesgoProfesional">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Unidad Administrativa*</label>
                        <ui-select name="unidadAdministrativa_id" ng-model="nuevo.unidadAdministrativa_id" required>
                          <ui-select-match>
                              <span>{{$select.selected.codigo}}</span>
                          </ui-select-match>
                          <ui-select-choices repeat="ua.codigo as ua in unidadAdministrativa | filter: $select.search">
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
                          <ui-select-choices repeat="ap.codigo as ap in adscripcionPresupuestal | filter: $select.search">
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
                          <ui-select-choices repeat="af.codigo as af in adscripcionFisica | filter: $select.search">
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
                          <ui-select-choices repeat="s.codigo as s in servicio | filter: $select.search">
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
                          <ui-select-choices repeat="h.id as h in horario | filter: $select.search">
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
                          <ui-select-choices repeat="t.id as t in turno | filter: $select.search">
                              <span>{{t.nombre}}</span>
                          </ui-select-choices>
                        </ui-select>
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
