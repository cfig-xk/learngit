<?php

namespace frontend\controllers;

use Yii;
use common\models\YiiStory;
use common\models\YiiStorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * YiiStoryController implements the CRUD actions for YiiStory model.
 */
class YiiStoryController extends Controller
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
     * Lists all YiiStory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YiiStorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single YiiStory model.
     * @param integer $personid
     * @param integer $historyid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($personid, $historyid)
    {
        return $this->render('view', [
            'model' => $this->findModel($personid, $historyid),
        ]);
    }

    /**
     * Creates a new YiiStory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new YiiStory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'personid' => $model->personid, 'historyid' => $model->historyid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing YiiStory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $personid
     * @param integer $historyid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($personid, $historyid)
    {
        $model = $this->findModel($personid, $historyid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'personid' => $model->personid, 'historyid' => $model->historyid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing YiiStory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $personid
     * @param integer $historyid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($personid, $historyid)
    {
        $this->findModel($personid, $historyid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the YiiStory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $personid
     * @param integer $historyid
     * @return YiiStory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($personid, $historyid)
    {
        if (($model = YiiStory::findOne(['personid' => $personid, 'historyid' => $historyid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
