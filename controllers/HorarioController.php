<?php

namespace app\controllers;

use Yii;
use app\models\Horario;
use app\models\HorarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class HorarioController extends Controller
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
        $registros = Horario::find()->where('estatus=1')->all();
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
        $model = new Horario();
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
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        return $this->render('update', [
            'model' => $model,
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
        if (($model = Horario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}