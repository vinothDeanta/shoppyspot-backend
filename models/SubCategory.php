<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_sub_category".
 *
 * @property int $sub_category_id
 * @property int $category_id
 * @property string $sub_category_name
 * @property string|null $sub_category_description
 */
class SubCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_sub_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'sub_category_name'], 'required'],
            [['category_id'], 'integer'],
            [['sub_category_name', 'sub_category_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_category_id' => 'Sub Category ID',
            'category_id' => 'Category ID',
            'sub_category_name' => 'Sub Category Name',
            'sub_category_description' => 'Sub Category Description',
        ];
    }
}
