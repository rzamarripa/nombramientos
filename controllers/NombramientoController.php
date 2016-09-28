<?php

namespace app\controllers;

use Yii;
use app\models\Nombramiento;
use app\models\NombramientoSearch;
use app\models\Trabajadores;
use app\models\Tipomovimiento;
use app\models\Plaza;
use app\models\Unidadadministrativa;
use app\models\Adscripcionpresupuestal;
use app\models\Adscripcionfisica;
use app\models\Servicio;
use app\models\Turno;
use app\models\Horario;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class NombramientoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $registros = Nombramiento::find()->where('estatus=1')->all();
        return $this->render('index', [
            'registros' => $registros,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Nombramiento();
        $trabajadores = Trabajadores::find()->where('estatus=1')->asArray()->all();
        $tipoMovimiento = Tipomovimiento::find()->where('estatus=1')->asArray()->all();
        $plaza = Plaza::find()->where('estatus=1')->asArray()->all();
        $unidadAdministrativa = Unidadadministrativa::find()->where('estatus=1')->asArray()->all();
        $adscripcionPresupuestal = Adscripcionpresupuestal::find()->where('estatus=1')->asArray()->all();
        $adscripcionFisica = Adscripcionfisica::find()->where('estatus=1')->asArray()->all();
        $servicio = Servicio::find()->where('estatus=1')->asArray()->all();
        $turno = Turno::find()->where('estatus=1')->asArray()->all();
        $horario = Horario::find()->where('estatus=1')->asArray()->all();
        if (Yii::$app->request->post()) {
            $model->attributes = $_POST['attributes'];
            if($model->save()){
                echo json_encode(1);
            }else{
                echo "<pre>"; print_r($model->errors);echo"</pre>";
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'trabajadores' => $trabajadores,
                'tipoMovimiento' => $tipoMovimiento,
                'plaza' => $plaza,
                'unidadAdministrativa' => $unidadAdministrativa,
                'adscripcionPresupuestal' => $adscripcionPresupuestal,
                'adscripcionFisica' => $adscripcionFisica,
                'servicio' => $servicio,
                'turno' => $turno,
                'horario' => $horario,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $trabajadores = Trabajadores::find()->where('estatus=1')->asArray()->all();
        return $this->render('update', [
            'model' => $model,
            'trabajadores' => $trabajadores,
        ]);
    }

    public function actionActualizar()
    {
        $model = $this->findModel($_POST['attributes']['id']);
        if (Yii::$app->request->post()) {
            $model->attributes = $_POST['attributes'];
            if($model->save()){
                echo json_encode(1);
            }else{
                echo "<pre>"; print_r($model->errors);echo"</pre>";
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Nombramiento::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
