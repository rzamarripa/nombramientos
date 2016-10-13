<?php
    use yii\helpers\Html;
?>
<div class="row">
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-body">
          <form name="form" novalidate>
            <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label>Nombre*</label>
                      <input class="form-control" type="text" name="nombre" ng-model="nuevo.nombre" maxlength="20"  required>
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
    </div>
</div>