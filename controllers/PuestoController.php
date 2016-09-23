<?php

namespace app\controllers;

use Yii;
use app\models\Puesto;
use app\models\Tipopuesto;
use app\models\PuestoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class PuestoController extends Controller
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
        $registros = Puesto::find()->where('estatus=1')->all();
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
        $model = new Puesto();
        $tiposPuesto = Tipopuesto::find()->where('estatus=1')->asArray()->all();
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
                'tiposPuesto' => $tiposPuesto,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tiposPuesto = Tipopuesto::find()->where('estatus=1')->asArray()->all();
        return $this->render('update', [
            'model' => $model,
            'tiposPuesto' => $tiposPuesto,
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
        if (($model = Puesto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}