<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

//$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <div class="row-fluid">
                       <center><i class="icofont icofont-users-alt-5" style="font-size:7em;"></i></center>
                    </div>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin">
                        <fieldset>
                            <label>Nombre de Usuario</label>
                            <?= $form->field($model, 'username')->label(false); ?>
                            <label>Contraseña</label>
                            <?= $form->field($model, 'password')->passwordInput()->label(false); ?>
                            <input class="btn btn-lg btn-info btn-block" type="submit" id="login" value="Iniciar Sesión">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>