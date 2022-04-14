<?php

namespace app\controllers;

use app\models\SubCategory;
use app\models\SubCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * SubController implements the CRUD actions for SubCategory model.
 */
class SubController extends Controller
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
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['index','create','update','view'],
                    'rules' => [
                        // allow authenticated users
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        // everything else is denied
                    ],
                ], 
            ]
        );
    }

    /**
     * Lists all SubCategory models.
     *
     * @return string
     */
    public function actionIndex()
    {   
        if (\Yii::$app->user->can('view-sub-category')) {
            $searchModel = new SubCategorySearch();
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
     * Displays a single SubCategory model.
     * @param int $sub_category_id Sub Category ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($sub_category_id)
    {
        if (\Yii::$app->user->can('view-sub-category')) {
            return $this->render('view', [
                'model' => $this->findModel($sub_category_id),
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Creates a new SubCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-sub-category')) {
            $model = new SubCategory();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'sub_category_id' => $model->sub_category_id]);
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
     * Updates an existing SubCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $sub_category_id Sub Category ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($sub_category_id)
    {
        if (\Yii::$app->user->can('edit-sub-category')) {
            $model = $this->findModel($sub_category_id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'sub_category_id' => $model->sub_category_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Deletes an existing SubCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $sub_category_id Sub Category ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($sub_category_id)
    {
        if (\Yii::$app->user->can('delete-sub-category')) {
            $this->findModel($sub_category_id)->delete();

            return $this->redirect(['index']);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Finds the SubCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $sub_category_id Sub Category ID
     * @return SubCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($sub_category_id)
    {
        if (($model = SubCategory::findOne(['sub_category_id' => $sub_category_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
