<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_products_images".
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $filename
 * @property string|null $status
 * @property string|null $createddate
 * @property string|null $updateddate
 */
class TbProductsImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_products_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id'], 'required'],
            [['product_id', 'status'], 'integer'],
            [['createddate', 'updateddate'], 'safe'],
            [['filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'filename' => 'Filename',
            'status' => 'Status',
            'createddate' => 'Createddate',
            'updateddate' => 'Updateddate',
        ];
    }

    public function beforeSave($insert) {
        $this->status = 1;
        $this->createddate = date('Y-m-d H:i:s');
        $this->updateddate = date('Y-m-d H:i:s');
        return parent::beforeSave($insert);
    }
}
