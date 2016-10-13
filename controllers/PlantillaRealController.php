<?php

namespace app\controllers;

use Yii;
use app\models\Plantillareal;
use app\models\PlantillarealSearch;
use app\models\Trabajadores;
use app\models\Servicio;
use app\models\Turno;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class PlantillarealController extends Controller
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
        $registros = Plantillareal::find()->all();
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
        $model = new Plantillareal();
        $trabajador = Trabajadores::find()->where('estatus=1')->asArray()->all();
        $servicio = Servicio::find()->where('estatus=1')->asArray()->all();
        $turno = Turno::find()->where('estatus=1')->asArray()->all();
        if (Yii::$app->request->post()) {
            $model->attributes = $_POST['attributes'];
            if($model->save()){
                echo json_encode(1);
            }else{
                echo json_encode($model->errors);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'trabajador' => $trabajador,
                'servicio' => $servicio,
                'turno' => $turno,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $trabajador = Trabajador::find()->where('estatus=1')->asArray()->all();
        $servicio = Servicio::find()->where('estatus=1')->asArray()->all();
        $turno = Turno::find()->where('estatus=1')->asArray()->all();
        return $this->render('update', [
            'model' => $model,
            'trabajador' => $trabajador,
            'servicio' => $servicio,
            'turno' => $turno,
        ]);
    }

    public function actionActualizar()
    {
        $model = $this->findModel($_POST['attributes']['numeroPlantillareal']);
        if (Yii::$app->request->post()) {
            $model->attributes = $_POST['attributes'];
            if($model->save()){
                echo json_encode(1);
            }else{
                echo json_encode($model->errors);
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
        if (($model = Plantillareal::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSearch(){
    	$search = $_POST['search'];
    	$result = Trabajadores::find()->where('nombre LIKE :query')->addParams([':query'=>'%'.$search.'%'])->asArray()->all();
    	echo json_encode($result);
    }
}
