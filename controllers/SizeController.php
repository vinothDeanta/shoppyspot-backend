<?php

namespace app\controllers;

use app\models\TbSize;
use app\models\TbSizeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SizeController implements the CRUD actions for TbSize model.
 */
class SizeController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TbSize models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbSizeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbSize model.
     * @param int $size_id Size ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($size_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($size_id),
        ]);
    }

    /**
     * Creates a new TbSize model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbSize();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'size_id' => $model->size_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbSize model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $size_id Size ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($size_id)
    {
        $model = $this->findModel($size_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'size_id' => $model->size_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbSize model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $size_id Size ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($size_id)
    {
        $this->findModel($size_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbSize model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $size_id Size ID
     * @return TbSize the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($size_id)
    {
        if (($model = TbSize::findOne(['size_id' => $size_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
