<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_template_permission".
 *
 * @property int $template_id
 * @property string $template_name
 * @property int|null $category_id
 * @property int|null $product_name
 * @property int|null $product_desc
 * @property int|null $product_image
 * @property int|null $brand_name
 * @property int|null $model_number
 * @property int|null $model_name
 * @property int|null $sub_category_id
 * @property int|null $color_id
 * @property int|null $size
 * @property int|null $product_fit
 * @property int|null $material_ratio
 * @property int|null $department
 * @property int|null $generic_name
 * @property int|null $country_of_Orgin
 * @property int|null $age_of_use
 * @property int|null $skillset
 * @property int|null $ideal_for
 * @property int|null $occasion
 * @property int|null $primary_product_type_color
 * @property int|null $secondary_product_type_color
 * @property int|null $pattern
 * @property int|null $product_type
 * @property int|null $machine_washable
 * @property int|null $thread_count
 * @property int|null $maximum_wattage
 * @property int|null $Adjustable
 * @property int|null $project_shape
 * @property int|null $body_material
 * @property int|null $product_inner_material
 * @property int|null $handle_with_care
 * @property int|null $mechanism
 * @property int|null $GSM
 * @property int|null $leak_resistance
 * @property int|null $connector
 * @property int|null $connectivity_technology
 * @property int|null $compatible_devices
 * @property int|null $hardware_platform
 * @property int|null $display_technologies
 * @property string|null $special_feature
 * @property int|null $resolution
 * @property int|null $refresh_rate
 * @property int|null $battery_type
 * @property int|null $rechargeable
 * @property int|null $no_of_battery
 * @property int|null $warrently_summary
 * @property int|null $warrently_year
 * @property int|null $discount
 * @property int|null $product_instock
 * @property int|null $product_quantity
 * @property int|null $product_price
 */
class TbTemplatePermission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_template_permission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['template_name'], 'required'],
            [['category_id', 'product_name', 'product_desc', 'product_image', 'brand_name', 'model_number', 'model_name', 'sub_category_id', 'color_id', 'size', 'product_fit', 'material_ratio', 'department', 'generic_name', 'country_of_Orgin', 'age_of_use', 'skillset', 'ideal_for', 'occasion', 'primary_product_type_color', 'secondary_product_type_color', 'pattern', 'product_type', 'machine_washable', 'thread_count', 'maximum_wattage', 'Adjustable', 'project_shape', 'body_material', 'product_inner_material', 'handle_with_care', 'mechanism', 'GSM', 'leak_resistance', 'connector', 'connectivity_technology', 'compatible_devices', 'hardware_platform', 'display_technologies', 'resolution', 'refresh_rate', 'battery_type', 'rechargeable', 'no_of_battery', 'warrently_summary', 'warrently_year', 'discount', 'product_instock', 'product_quantity', 'product_price'], 'integer'],
            [['template_name'], 'string', 'max' => 255],
            [['special_feature'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'template_id' => 'Template ID',
            'template_name' => 'Template Name',
            'category_id' => 'Category ID',
            'product_name' => 'Product Name',
            'product_desc' => 'Product Desc',
            'product_image' => 'Product Image',
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
}
