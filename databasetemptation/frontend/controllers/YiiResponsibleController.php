<?php

namespace frontend\controllers;

use Yii;
use common\models\YiiResponsible;
use common\models\YiiResponsibleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * YiiResponsibleController implements the CRUD actions for YiiResponsible model.
 */
class YiiResponsibleController extends Controller
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
     * Lists all YiiResponsible models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YiiResponsibleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single YiiResponsible model.
     * @param integer $workerid
     * @param integer $activityid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($workerid, $activityid)
    {
        return $this->render('view', [
            'model' => $this->findModel($workerid, $activityid),
        ]);
    }

    /**
     * Creates a new YiiResponsible model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new YiiResponsible();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'workerid' => $model->workerid, 'activityid' => $model->activityid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing YiiResponsible model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $workerid
     * @param integer $activityid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($workerid, $activityid)
    {
        $model = $this->findModel($workerid, $activityid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'workerid' => $model->workerid, 'activityid' => $model->activityid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing YiiResponsible model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $workerid
     * @param integer $activityid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($workerid, $activityid)
    {
        $this->findModel($workerid, $activityid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the YiiResponsible model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $workerid
     * @param integer $activityid
     * @return YiiResponsible the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($workerid, $activityid)
    {
        if (($model = YiiResponsible::findOne(['workerid' => $workerid, 'activityid' => $activityid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
