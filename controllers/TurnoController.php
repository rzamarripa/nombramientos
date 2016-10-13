<?php

namespace app\controllers;

use Yii;
use app\models\Turno;
use app\models\TurnoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

/**
 * TurnoController implements the CRUD actions for Turno model.
 */
class TurnoController extends Controller
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
        $registros = Turno::find()->where('estatus=1')->all();
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
        $model = new Turno();
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

    /**
     * Finds the Turno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Turno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Turno::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
