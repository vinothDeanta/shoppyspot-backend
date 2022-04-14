<?php

namespace app\controllers;

use app\models\TbTemplatePermission;
use app\models\TbTemplatePermissionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermissionController implements the CRUD actions for TbTemplatePermission model.
 */
class PermissionController extends Controller
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
     * Lists all TbTemplatePermission models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('view-project-template')) {
            $searchModel = new TbTemplatePermissionSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Displays a single TbTemplatePermission model.
     * @param int $template_id Template ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($template_id)
    {
        if (\Yii::$app->user->can('view-project-template')) {
            return $this->render('view', [
                'model' => $this->findModel($template_id),
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Creates a new TbTemplatePermission model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-project-template')) {
            $model = new TbTemplatePermission();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'template_id' => $model->template_id]);
                }
            } else {
                $model->loadDefaultValues();
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Updates an existing TbTemplatePermission model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $template_id Template ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($template_id)
    {
        if (\Yii::$app->user->can('edit-project-template')) {
            $model = $this->findModel($template_id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'template_id' => $model->template_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');  
        }
    }

    /**
     * Deletes an existing TbTemplatePermission model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $template_id Template ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($template_id)
    {
        if (\Yii::$app->user->can('delete-project-template')) {
            $this->findModel($template_id)->delete();

            return $this->redirect(['index']);
        } else{
            return $this->render('../error');  
        }
    }

    /**
     * Finds the TbTemplatePermission model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $template_id Template ID
     * @return TbTemplatePermission the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($template_id)
    {
        if (($model = TbTemplatePermission::findOne(['template_id' => $template_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
