<?php

namespace app\controllers;

use app\models\TbColor;
use app\models\TbColorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ColorController implements the CRUD actions for TbColor model.
 */
class ColorController extends Controller
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
     * Lists all TbColor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbColorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbColor model.
     * @param int $color_id Color ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($color_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($color_id),
        ]);
    }

    /**
     * Creates a new TbColor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbColor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'color_id' => $model->color_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbColor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $color_id Color ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($color_id)
    {
        $model = $this->findModel($color_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'color_id' => $model->color_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbColor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $color_id Color ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($color_id)
    {
        $this->findModel($color_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbColor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $color_id Color ID
     * @return TbColor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($color_id)
    {
        if (($model = TbColor::findOne(['color_id' => $color_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
