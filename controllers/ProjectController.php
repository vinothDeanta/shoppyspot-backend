<?php

namespace app\controllers;

use app\models\TbCategory;
use app\models\SubCategory;
use app\models\TbProducts;
use app\models\TbProductsImages;
use yii\filters\VerbFilter;

class ProjectController extends \yii\web\Controller
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
                // 'corsFilter'  => [
                //     'class' => \yii\filters\Cors::className(),
                //     'cors'  => [
                //         // restrict access to domains:
                //         'Origin'                           => ['*'],
                //         'Access-Control-Request-Method'    => ['POST','GET', 'DELETE', 'PUT'],
                //         'Access-Control-Allow-Credentials' => true,
                //         'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
                //     ],
                // ],
                'corsFilter' => [
                    'class' => \yii\filters\Cors::class,
                ]
            ]
        );
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }

    /**
     * Creates a new TbProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionProductlist()
    {
        $productDetails = TbProducts::find()->all();
        $data = [];
        if(!empty($productDetails)){
            foreach ($productDetails as $key => $productValue) {
                $data[$key]['id'] = $productValue->product_id;
                $data[$key]['title'] = $productValue->product_name;
                $data[$key]['description'] = $productValue->product_desc;
                $data[$key]['category'] = TbCategory::findOne($productValue->category_id)->category_name;
                $data[$key]['sub_category'] = SubCategory::findOne($productValue->sub_category_id)->sub_category_name;
                $data[$key]['price'] = $productValue->product_price;
                $data[$key]['stock'] = $productValue->product_instock;
                $data[$key]['product_quantity'] = $productValue->product_quantity;
                $data[$key]['brand'] = $productValue->brand_name;
                $data[$key]['type'] = $productValue->product_type;
                $data[$key]['size'] = $productValue->size;
                $data[$key]['color_id'] = $productValue->size;
                $data[$key]['discount'] = "40";
                $imageDetails= TbProductsImages::find()->where(['product_id'=>$productValue->product_id])
                ->all();
                $imageList = [];
                if(!empty($imageDetails) > 0){
                    foreach ($imageDetails as $key => $imagevalue) {
                       $imageList[$key]['id'] = $imagevalue->id;
                       $altText = explode("/", $imagevalue->filename);
                       $imageList[$key]['alt'] = $altText[1];
                       $imageList[$key]['src'] = $imagevalue->filename;
                    }
                     
                }

                $data[$key]['images'] = $imageList;
                $data[$key]['variants'] = [["id"=> "1.1", "sku"=> "sku1", "size"=> "s", "color"=> "yellow", "image_id"=> 111, "__typename"=> "Variants"]];
            }
        }
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'data' => $data,
            'status' => 'success',
        ];

    }
    
    /**
     * Creates a new TbProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionProductDetails()
    {
        $request = \Yii::$app->request;

	    $post = $request->post();

        $productValue = TbProducts::findOne($id);
        $data = [];
        if(!empty($productValue)){
                $data['id'] = $productValue->product_id;
                $data['title'] = $productValue->product_name;
                $data['description'] = $productValue->product_desc;
                $data['category'] = TbCategory::findOne($productValue->category_id)->category_name;
                $data['sub_category'] = subCategory::findOne($productValue->sub_category_id)->category_name;
                $data['price'] = $productValue->product_price;
                $data['stock'] = $productValue->product_instock;
                $data['product_quantity'] = $productValue->product_quantity;
                $data['brand'] = $productValue->brand_name;
                $data['type'] = $productValue->product_type;
                $data['size'] = $productValue->size;
                $data['color_id'] = $productValue->size;
                $imageDetails= TbProductsImages::find()->where(['product_id'=>$productValue->product_id])
                ->all();
                $imageList = [];
                if(!empty($imageDetails) > 0){
                    foreach ($imageDetails as $key => $imagevalue) {
                       $imageList[$key]['id'] = $imagevalue->id;
                       $altText = explode("/", $imagevalue->filename);
                       $imageList[$key]['alt'] = $altText[1];
                       $imageList[$key]['src'] = $imagevalue->filename;
                    }
                     
                }
                $data['images'] = $imageList;
                $data['variants'] = '';
        }
        
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'data' => $data,
            'status' => 'success',
        ];

    }

}
