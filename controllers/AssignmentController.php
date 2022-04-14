<?php

namespace app\controllers;

use app\models\AuthAssignment;
use app\models\AuthAssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Users;

/**
 * AssignmentController implements the CRUD actions for AuthAssignment model.
 */
class AssignmentController extends Controller
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
     * Lists all AuthAssignment models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('view-role-control')) {
            $searchModel = new AuthAssignmentSearch();
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
     * Displays a single AuthAssignment model.
     * @param int $id ID
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $item_name, $user_id)
    {
        if (\Yii::$app->user->can('view-role-control')) {
            return $this->render('view', [
                'model' => $this->findModel($id, $item_name, $user_id),
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Creates a new AuthAssignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-role-control')) {
            $model = new AuthAssignment();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id, 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
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
     * Updates an existing AuthAssignment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $item_name, $user_id)
    {
        if (\Yii::$app->user->can('edit-role-control')) {
            $model = $this->findModel($id, $item_name, $user_id);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Deletes an existing AuthAssignment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $item_name, $user_id)
    {
        if (\Yii::$app->user->can('delete-role-control')) {
            $this->findModel($id, $item_name, $user_id)->delete();

            return $this->redirect(['index']);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Finds the AuthAssignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param string $item_name Item Name
     * @param string $user_id User ID
     * @return AuthAssignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $item_name, $user_id)
    {
        if (($model = AuthAssignment::findOne(['id' => $id, 'item_name' => $item_name, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
