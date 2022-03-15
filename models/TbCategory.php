<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_category".
 *
 * @property int $category_id
 * @property string $category_name
 * @property string|null $category_desc
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property TbProducts[] $tbProducts
 */
class TbCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_name'], 'string', 'max' => 255],
            [['category_desc'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'category_desc' => 'Category Desc',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[TbProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbProducts()
    {
        return $this->hasMany(TbProducts::className(), ['category_id' => 'category_id']);
    }
}
