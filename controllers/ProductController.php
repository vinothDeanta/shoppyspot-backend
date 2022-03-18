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
     * Lists all TbProducts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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

    /**
     * Creates a new TbProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbProducts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                //Mutiple File upload 
                $model->files = UploadedFile::getInstances($model, 'files');
                foreach ($model->files as $key => $file) {
                    $modelImages = new TbProductsImages();
                    $file->saveAs('uploads/'. $file->baseName . '.' . $file->extension);//Upload files to server
                    $modelImages->filename = 'uploads/' . $file->baseName . '.' . $file->extension;//Save file names in database- '**' is for separating images
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
        $model = $this->findModel($product_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_id' => $model->product_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
        $this->findModel($product_id)->delete();

        return $this->redirect(['index']);
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
