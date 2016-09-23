<?php
    use yii\helpers\Html;
?>
<div class="panel panel-default">
    <div class="panel-body">
        <form name="form" novalidate>
            <div class="row">
              <div class="col-sm-4">
                  <div class="form-group">
                      <label>Código*</label>
                      <input ng-readonly="actualizar" class="form-control" type="number" name="codigo" ng-model="nuevo.codigo"  required>
                  </div>
              </div>
              <div class="col-sm-8">
                  <div class="form-group">
                      <label>Denominación*</label>
                      <input class="form-control" type="text" name="denominacion" ng-model="nuevo.denominacion" maxlength="100" required>
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