<?php

namespace app\controllers;

use app\models\AuthItemChild;
use app\models\AuthItemChildSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AuthAssignment;
use app\models\AuthItem;


/**
 * ChildController implements the CRUD actions for AuthItemChild model.
 */
class ChildController extends Controller
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
     * Lists all AuthItemChild models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('view-has-permission')) {
            $searchModel = new AuthItemChildSearch();
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
     * Displays a single AuthItemChild model.
     * @param string $parent Parent
     * @param string $child Child
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($parent, $child)
    {
        if (\Yii::$app->user->can('view-has-permission')) {
            return $this->render('view', [
                'model' => $this->findModel($parent, $child),
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Creates a new AuthItemChild model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-has-permission')) {
            $model = new AuthItemChild();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'parent' => $model->parent, 'child' => $model->child]);
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
     * Updates an existing AuthItemChild model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $parent Parent
     * @param string $child Child
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($parent, $child)
    {
        if (\Yii::$app->user->can('edit-has-permission')) {
            $model = $this->findModel($parent, $child);

            if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'parent' => $model->parent, 'child' => $model->child]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Deletes an existing AuthItemChild model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $parent Parent
     * @param string $child Child
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($parent, $child)
    {
        if (\Yii::$app->user->can('delete-has-permission')) {
            $this->findModel($parent, $child)->delete();

            return $this->redirect(['index']);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Finds the AuthItemChild model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $parent Parent
     * @param string $child Child
     * @return AuthItemChild the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($parent, $child)
    {
        if (($model = AuthItemChild::findOne(['parent' => $parent, 'child' => $child])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSubpermission($id)
    {

        $assignedPermission = AuthItemChild::find()
                            ->where(['parent'=>$id])
                            ->all();
        $assignedPermissionlist = [];
        if(count($assignedPermission) > 0){
            foreach ($assignedPermission as $key => $assignedPermissionValue) {
                $assignedPermissionlist[] = $assignedPermissionValue->child;
            }
        }
        

        $permissionList = AuthItem::find()
                            ->where(['type'=>1])
                            ->all();
        if(count($permissionList) > 0){
            foreach ($permissionList as $key => $permissionListvalue) {
                if (!in_array($permissionListvalue->name, $assignedPermissionlist)){
                    echo"<option value='".$permissionListvalue->name."'>".$permissionListvalue->name."</option>";
                }
            }
        }
    }
}
