<?php

namespace app\controllers;

use app\models\TbCategory;
use app\models\SubCategory;
use app\models\TbProducts;
use app\models\TbProductsImages;
use app\models\TbColor;
use app\models\TbSize;
use app\models\Users;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use Exception;

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
                $data[$key]['discount'] =  $productValue->discount;
                $imageDetails= TbProductsImages::find()->where(['product_id'=>$productValue->product_id])
                ->all();
                $imageList = [];
                if(!empty($imageDetails) > 0){
                    foreach ($imageDetails as $imagekey => $imagevalue) {
                       $imageList[$imagekey]['id'] = $imagevalue->id;
                       $imageList[$imagekey]['alt'] = $imagevalue->filename;
                       $imageList[$imagekey]['src'] = "http://shoppyspot.com/shoppyspot-backend/web/".$imagevalue->filepath;
                    }
                     
                }
                $data[$key]['images'] = $imageList;
               

                $sizeList = [];
                if(!empty($productValue->size)){
                    $sizeExplode = explode(",", $productValue->size);
                    if(count($sizeExplode) > 0){
                        foreach ($sizeExplode as $keys => $sizevalue) {
                            $sizeData = TbSize::findOne(['size_id', $sizevalue]);
                            $sizeList[$keys]['id'] = $sizeData->size_id;
                            $sizeList[$keys]['size_name'] = $sizeData->size_name;
                        }
                    }
                   
                }
               
                if(!empty($productValue->color_id)){
                    $colorExplode = explode(",", $productValue->color_id);
                    if(count($colorExplode) > 0){
                        foreach ($colorExplode as $keyed => $colorvalue) {
                            $colorData = TbColor::findOne(['size_id', $colorvalue]);
                            $colorList[$keyed]['id'] = $colorData->color_id;
                            $colorList[$keyed]['color_name'] = $colorData->color_name;
                        }
                    }
                   
                }


                $data[$key]['size'] = $sizeList;
                $data[$key]['color'] = $colorList;
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
    public function actionProductdetails()
    {
        $request = \Yii::$app->request;

	    $post = $request->post();
        $productValue = TbProducts::findOne($post['id']);
        $data = [];
        if(!empty($productValue)){
                $data['id'] = $productValue->product_id;
                $data['title'] = $productValue->product_name;
                $data['description'] = $productValue->product_desc;
                $data['category'] = TbCategory::findOne($productValue->category_id)->category_name;
                $data['sub_category'] = SubCategory::findOne($productValue->sub_category_id)->sub_category_name;
                $data['price'] = $productValue->product_price;
                $data['stock'] = $productValue->product_instock;
                $data['product_quantity'] = $productValue->product_quantity;
                $data['brand'] = $productValue->brand_name;
                $data['type'] = $productValue->product_type;
                $data['size'] = $productValue->size;
                $data['color_id'] = $productValue->size;
                $data['discount'] =  $productValue->discount;
                $imageDetails= TbProductsImages::find()->where(['product_id'=>$productValue->product_id])
                ->all();
                $imageList = [];
                if(!empty($imageDetails) > 0){
                    foreach ($imageDetails as $imagekey => $imagevalue) {
                       $imageList[$imagekey]['id'] = $imagevalue->id;
                       $imageList[$imagekey]['alt'] = $imagevalue->filename;
                       $imageList[$imagekey]['src'] = "http://shoppyspot.com/shoppyspot-backend/web/".$imagevalue->filepath;
                    }
                     
                }
                $data['images'] = $imageList;


                $sizeList = [];
                if(!empty($productValue->size)){
                    $sizeExplode = explode(",", $productValue->size);
                    if(count($sizeExplode) > 0){
                        foreach ($sizeExplode as $keys => $sizevalue) {
                            $sizeData = TbSize::findOne(['size_id', $sizevalue]);
                            $sizeList[$keys]['id'] = $sizeData->size_id;
                            $sizeList[$keys]['size_name'] = $sizeData->size_name;
                        }
                    }
                   
                }
               
                $colorList = [];
                if(!empty($productValue->color_id)){
                    $colorExplode = explode(",", $productValue->color_id);
                    if(count($colorExplode) > 0){
                        foreach ($colorExplode as $keyed => $colorvalue) {
                            $colorData = TbColor::findOne(['size_id', $colorvalue]);
                            $colorList[$keyed]['id'] = $colorData->color_id;
                            $colorList[$keyed]['color_name'] = $colorData->color_name;
                        }
                    }
                }

                
                $data['images'] = $imageList;
                $data['size'] = $sizeList;
                $data['color'] = $colorList;


                $data['variants'] = [["id"=> "1.1", "sku"=> "sku1", "size"=> "s", "color"=> "yellow", "image_id"=> 111, "__typename"=> "Variants"]];
        }
        
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'data' => $data,
            'status' => 'success',
        ];

    }


    public function actionUserregister()
    {
        $request = \Yii::$app->request;
	    $post = $request->post();
        if(!$post || empty($post['email']) ||  empty($post['password']) || empty($post['firstname']) || empty($post['lastname'])){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        $userData = Users::find()->where(['username'=>$post['firstname'], 'phone_no'=> $post['password']])->one();
        if(empty($userData)){
            $model = new Users();
            $model->username = $post['firstname'];
            $model->last_name = $post['lastname'];
            $model->user_email = $post['email'];
            $model->password = password_hash( $post['password'], PASSWORD_ARGON2I);
            $model->authKey = md5(random_bytes(5));
            $model->phone_no =  $post['password'];
            $model->accessToken = password_hash(random_bytes(10), PASSWORD_DEFAULT);
            $model->city = $post['city'];
            
            if($model->save()){
                $Lastinsetedid = $model->id; 
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return [
                    'data' => $post,
                    'status' => 'success',
                    'lastinsert_id' => $Lastinsetedid

                ];
            }
        } else{
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            throw new NotFoundHttpException('The username is already exist.');
        }
    }

    public function actionUserlogin()
    {
        $request = \Yii::$app->request;
	    $post = $request->post();
        if(!$post || empty($post['username']) ||  empty($post['password'])){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        // $query = new \yii\db\Query();
        // $userDetails = $query->select('*') 
        //         ->from('tb_users')
        //         ->where(['username' => $post['username'], 'phone_no' =>$post['password']]) // Specify multiple conditions
        //         ->one();       
            
            
            
        $userData = Users::find()->where(['username'=>$post['username'], 'phone_no'=> $post['password']])->one();

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'data' => $post,
            'status' => 'success',
            'userData'=>$userData

        ];   

    }

}
