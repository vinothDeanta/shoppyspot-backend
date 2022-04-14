<?php

namespace app\controllers;

use app\models\TbProducts;
use app\models\TbProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\SubCategory;
use app\models\TbProductsImages;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\models\TbTemplatePermission;
use yii\web\ForbiddenHttpException;

/**
 * ProductController implements the CRUD actions for TbProducts model.
 */
class ProductController extends Controller
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
                    'only' => ['index','create','update','view','select','template'],
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
     * Lists all TbProducts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (\Yii::$app->user->can('view-product')) {
            $searchModel = new TbProductsSearch();
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
     * Displays a single TbProducts model.
     * @param int $product_id Product ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($product_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($product_id),
        ]);
    }

    public function actionSelect()
    {
        $model = new TbTemplatePermission;
        if ($this->request->isPost) {
            if ($model->load($this->request->post())){
                $templateId =$_POST['TbTemplatePermission']['template_id'];
                // return $this->render('create', [
                //     'permissionlist'=> $templateId
                // ]);
                $this->actionTemplate($templateId);
            }
        }

        return $this->render('template', [
            'model' => $model,
        ]);
    }

    public function actionTemplate($id)
    {   
        $permissionlist = TbTemplatePermission::findOne(['template_id' => $id]);
        $data = [];
        foreach ($permissionlist as $key => $permissionlistvalue) {
            if($permissionlistvalue == 1){
                $data[] = "#".$key;
            }
        }
       
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'result' => $data,
            'status' => 'success',
        ];

    }



    /**
     * Creates a new TbProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (\Yii::$app->user->can('create-product')) {
            $model = new TbProducts();

            if ($this->request->isPost) {

                if ($model->load($this->request->post())) {

                    $model->color_id = implode(",", \Yii::$app->request->post( 'TbProducts' )['color_id']); //convert the array into string
                    $model->size = implode(",", \Yii::$app->request->post( 'TbProducts' )['size']); //convert the array into string
                    $model->user_id = \Yii::$app->user->identity->id;
                    $model->save(); 

                    //Mutiple File upload 
                    $model->files = UploadedFile::getInstances($model, 'files');
                    foreach ($model->files as $key => $file) {
                        $modelImages = new TbProductsImages();
                        $filepath = 'uploads/'.date("YmdHis")."_".microtime().'.' . $file->extension;
                        $filepath = str_replace(" ","_", $filepath);
                        $file->saveAs($filepath);
                        $modelImages->filename = $file->baseName . '.' . $file->extension;
                        $modelImages->filepath = $filepath;
                        $modelImages->product_id = $model->product_id;
                        $modelImages->save();
                    }
                    return $this->redirect(['view', 'product_id' => $model->product_id]);
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
     * Updates an existing TbProducts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $product_id Product ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($product_id)
    {
        if (\Yii::$app->user->can('update-product')) {
            $model = $this->findModel($product_id);

            if ($this->request->isPost && $model->load($this->request->post())) {
                $model->color_id = implode(",", \Yii::$app->request->post( 'TbProducts' )['color_id']); //convert the array into string
                $model->size = implode(",", \Yii::$app->request->post( 'TbProducts' )['size']); //convert the array into string
                $model->save();  

                return $this->redirect(['view', 'product_id' => $model->product_id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Deletes an existing TbProducts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $product_id Product ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($product_id)
    {
        if (\Yii::$app->user->can('delete-product')) {
            $this->findModel($product_id)->delete();
            return $this->redirect(['index']);
        } else{
            return $this->render('../error');
        }
    }

    /**
     * Finds the TbProducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $product_id Product ID
     * @return TbProducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($product_id)
    {
        if (($model = TbProducts::findOne(['product_id' => $product_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSubcategorylist($id)
    {
        $subCategoryCount = SubCategory::find()
                            ->where(['category_id'=>$id])
                            ->count();
        $subCategorylist = SubCategory::find()
                            ->where(['category_id'=>$id])
                            ->all();

        if($subCategoryCount > 0){
            foreach ($subCategorylist as $subCategoryValue) {
               echo"<option value='".$subCategoryValue->sub_category_id."'>".$subCategoryValue->sub_category_name."</option>";
            }
        }
        else{
            echo "<option></option>";
        }
    }
}
