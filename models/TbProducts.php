<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_products".
 *
 * @property int $product_id
 * @property int|null $category_id
 * @property string $product_name
 * @property string|null $product_desc
 * @property string|null $product_image
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $brand_name
 * @property string|null $model_number
 * @property string|null $model_name
 * @property int|null $sub_category_id
 * @property int|null $color_id
 * @property int|null $size
 * @property string|null $product_fit
 * @property string|null $material_ratio
 * @property string|null $department
 * @property string|null $generic_name
 * @property string|null $country_of_Orgin
 * @property string|null $age_of_use
 * @property string|null $skillset
 * @property string|null $ideal_for
 * @property string|null $occasion
 * @property string|null $primary_product_type_color
 * @property string|null $secondary_product_type_color
 * @property string|null $pattern
 * @property string|null $product_type
 * @property string|null $machine_washable
 * @property string|null $thread_count
 * @property string|null $maximum_wattage
 * @property string|null $Adjustable
 * @property string|null $project_shape
 * @property string|null $body_material
 * @property string|null $product_inner_material
 * @property string|null $handle_with_care
 * @property string|null $mechanism
 * @property string|null $GSM
 * @property string|null $leak_resistance
 * @property string|null $connector
 * @property string|null $connectivity_technology
 * @property string|null $compatible_devices
 * @property string|null $hardware_platform
 * @property string|null $display_technologies
 * @property string|null $special_feature
 * @property string|null $resolution
 * @property string|null $refresh_rate
 * @property string|null $battery_type
 * @property string|null $rechargeable
 * @property int|null $no_of_battery
 * @property string|null $warrently_summary
 * @property int|null $warrently_year
 * @property string|null $discount
 * @property int|null $product_instock
 * @property int|null $product_quantity
 * @property string|null $product_price
 *
 * @property TbCategory $category
 * @property SubCategory $subCategory
 */
class TbProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_products';
    }

    public $files;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'sub_category_id', 'color_id', 'size', 'no_of_battery', 'warrently_year', 'product_instock', 'product_quantity'], 'integer'],
            [['product_name'], 'required'],
            [['created_at', 'updated_at', 'files'], 'safe'],
            [['product_name', 'product_image', 'brand_name', 'model_number', 'model_name', 'product_fit', 'material_ratio', 'department', 'generic_name', 'country_of_Orgin', 'age_of_use', 'skillset', 'ideal_for', 'occasion', 'primary_product_type_color', 'secondary_product_type_color', 'pattern', 'product_type', 'maximum_wattage', 'body_material', 'product_inner_material', 'handle_with_care', 'GSM', 'compatible_devices', 'hardware_platform', 'display_technologies', 'refresh_rate', 'warrently_summary', 'discount', 'product_price'], 'string', 'max' => 255],
            [['product_desc', 'special_feature'], 'string', 'max' => 1000],
            [['machine_washable', 'thread_count', 'Adjustable', 'project_shape', 'mechanism', 'leak_resistance', 'connector', 'connectivity_technology', 'resolution', 'battery_type', 'rechargeable'], 'string', 'max' => 45],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbCategory::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['sub_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubCategory::className(), 'targetAttribute' => ['sub_category_id' => 'sub_category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'category_id' => 'Category ID',
            'product_name' => 'Product Name',
            'product_desc' => 'Product Desc',
            'product_image' => 'Product Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'brand_name' => 'Brand Name',
            'model_number' => 'Model Number',
            'model_name' => 'Model Name',
            'sub_category_id' => 'Sub Category ID',
            'color_id' => 'Color ID',
            'size' => 'Size',
            'product_fit' => 'Product Fit',
            'material_ratio' => 'Material Ratio',
            'department' => 'Department',
            'generic_name' => 'Generic Name',
            'country_of_Orgin' => 'Country Of Orgin',
            'age_of_use' => 'Age Of Use',
            'skillset' => 'Skillset',
            'ideal_for' => 'Ideal For',
            'occasion' => 'Occasion',
            'primary_product_type_color' => 'Primary Product Type Color',
            'secondary_product_type_color' => 'Secondary Product Type Color',
            'pattern' => 'Pattern',
            'product_type' => 'Product Type',
            'machine_washable' => 'Machine Washable',
            'thread_count' => 'Thread Count',
            'maximum_wattage' => 'Maximum Wattage',
            'Adjustable' => 'Adjustable',
            'project_shape' => 'Project Shape',
            'body_material' => 'Body Material',
            'product_inner_material' => 'Product Inner Material',
            'handle_with_care' => 'Handle With Care',
            'mechanism' => 'Mechanism',
            'GSM' => 'Gsm',
            'leak_resistance' => 'Leak Resistance',
            'connector' => 'Connector',
            'connectivity_technology' => 'Connectivity Technology',
            'compatible_devices' => 'Compatible Devices',
            'hardware_platform' => 'Hardware Platform',
            'display_technologies' => 'Display Technologies',
            'special_feature' => 'Special Feature',
            'resolution' => 'Resolution',
            'refresh_rate' => 'Refresh Rate',
            'battery_type' => 'Battery Type',
            'rechargeable' => 'Rechargeable',
            'no_of_battery' => 'No Of Battery',
            'warrently_summary' => 'Warrently Summary',
            'warrently_year' => 'Warrently Year',
            'discount' => 'Discount',
            'product_instock' => 'Product Instock',
            'product_quantity' => 'Product Quantity',
            'product_price' => 'Product Price',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(TbCategory::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[SubCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubCategory()
    {
        return $this->hasOne(SubCategory::className(), ['sub_category_id' => 'sub_category_id']);
    }
}
