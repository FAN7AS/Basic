<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Flight;
use app\modules\admin\models\Stock;
use app\modules\admin\models\Tour;
use app\modules\admin\models\Hotel;
use app\modules\admin\models\Tourists;
use app\modules\admin\models\TouristsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TouristsController implements the CRUD actions for Tourists model.
 */
class TouristsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tourists models. 
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new TouristsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
          
              $modelFlight=Flight::find()->orderby('NumberOfFlight ASC')->all();
              foreach ($modelFlight as $value)
              {
                $arrFlight[$value->idFLIG] =$value->NumberOfFlight;
              }
                $modelHotel=Hotel::find()->orderby('Title ASC')->all();
              foreach ($modelHotel as $value)
              {
                $arrHotel[$value->idHOT] =$value->Title;
              }
                  $modelTour=Tour::find()->orderby('Title ASC')->all();
              foreach ($modelTour as $value)
              {
                $arrTour[$value->idTOUR] =$value->Title;
              }
                     $modelCargo=Stock::find()->orderby('Title ASC')->all();
              foreach ($modelCargo as $value)
              {
                $arrCargo[$value->idCA] =$value->Title;
              }
      
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrFlight' => $arrFlight ,
            'arrHotel' => $arrHotel,
            'arrTour' => $arrTour,
            'arrCargo' => $arrCargo
        ]);
    }

    /**
     * Displays a single Tourists model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tourists model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tourists();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idTO]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tourists model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idTO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tourists model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tourists model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tourists the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tourists::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
