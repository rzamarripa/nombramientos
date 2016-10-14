<?php

namespace app\controllers;

use Yii;
use app\models\Tipomovimientodocumentacion;
use app\models\Tipomovimiento;
use app\models\TipomovimientodocumentacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

class TipoMovimientoDocumentacionController extends Controller
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
        $registros = Tipomovimientodocumentacion::find()->where('estatus=1')->all();
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
        $model = new Tipomovimientodocumentacion();
        $tiposMovimiento = Tipomovimiento::find()->where('estatus=1')->asArray()->all();
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
                'tiposMovimiento' => $tiposMovimiento,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tiposMovimiento = Tipomovimiento::find()->where('estatus=1')->asArray()->all();
        return $this->render('update', [
            'model' => $model,
            'tiposMovimiento' => $tiposMovimiento,
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
        if (($model = Tipomovimientodocumentacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
