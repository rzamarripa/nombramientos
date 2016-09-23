<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
              <div class="col-sm-3">
                  <div class="form-group">
                      <label>Código*</label>
                      <input ng-readonly="actualizar" class="form-control" type="number" name="codigo" ng-model="nuevo.codigo"  required>
                  </div>
              </div>
              <div class="col-sm-3">
                  <div class="form-group">
                      <label>Tipo Movimiento*</label>
                      <input class="form-control" type="text" name="tipoMovimiento" ng-model="nuevo.tipoMovimiento" maxlength="50" required>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label>Movimiento Específico*</label>
                      <input class="form-control" type="text" name="movimientoEspecifico" ng-model="nuevo.movimientoEspecifico" maxlength="100" required>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Definición*</label>
                      <textarea class="form-control" type="text" name="definicion" ng-model="nuevo.definicion" rows="3" required>
                      </textarea>
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