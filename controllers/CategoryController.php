<?php

namespace app\controllers;

use app\models\TbCategory;
use app\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CategoryController implements the CRUD actions for TbCategory model.
 */
class CategoryController extends Controller
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
     * Lists all TbCategory models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('view-category')) {
            $searchModel = new CategorySearch();
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
     * Displays a single TbCategory model.
     * @param int $category_id Category ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($category_id)
    {   
        if (\Yii::$app->user->can('view-category')) {
            return $this->render('view', [
                'model' => $this->findModel($category_id),
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Creates a new TbCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-category')) {
            $model = new TbCategory();
            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'category_id' => $model->category_id]);
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
     * Updates an existing TbCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $category_id Category ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($category_id)
    {
        if (\Yii::$app->user->can('edit-category')) {
            $model = $this->findModel($category_id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'category_id' => $model->category_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Deletes an existing TbCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $category_id Category ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($category_id)
    {
        if (\Yii::$app->user->can('delete-category')) {
            $this->findModel($category_id)->delete();
            return $this->redirect(['index']);
        }  else{
            return $this->render('../error');
        }
    }

    /**
     * Finds the TbCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $category_id Category ID
     * @return TbCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($category_id)
    {
        if (($model = TbCategory::findOne(['category_id' => $category_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
