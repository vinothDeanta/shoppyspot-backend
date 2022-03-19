<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbTemplatePermission;

/**
 * TbTemplatePermissionSearch represents the model behind the search form of `app\models\TbTemplatePermission`.
 */
class TbTemplatePermissionSearch extends TbTemplatePermission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['template_id', 'category_id', 'product_name', 'product_desc', 'product_image', 'brand_name', 'model_number', 'model_name', 'sub_category_id', 'color_id', 'size', 'product_fit', 'material_ratio', 'department', 'generic_name', 'country_of_Orgin', 'age_of_use', 'skillset', 'ideal_for', 'occasion', 'primary_product_type_color', 'secondary_product_type_color', 'pattern', 'product_type', 'machine_washable', 'thread_count', 'maximum_wattage', 'Adjustable', 'project_shape', 'body_material', 'product_inner_material', 'handle_with_care', 'mechanism', 'GSM', 'leak_resistance', 'connector', 'connectivity_technology', 'compatible_devices', 'hardware_platform', 'display_technologies', 'resolution', 'refresh_rate', 'battery_type', 'rechargeable', 'no_of_battery', 'warrently_summary', 'warrently_year', 'discount', 'product_instock', 'product_quantity', 'product_price'], 'integer'],
            [['template_name', 'special_feature'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbTemplatePermission::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'template_id' => $this->template_id,
            'category_id' => $this->category_id,
            'product_name' => $this->product_name,
            'product_desc' => $this->product_desc,
            'product_image' => $this->product_image,
            'brand_name' => $this->brand_name,
            'model_number' => $this->model_number,
            'model_name' => $this->model_name,
            'sub_category_id' => $this->sub_category_id,
            'color_id' => $this->color_id,
            'size' => $this->size,
            'product_fit' => $this->product_fit,
            'material_ratio' => $this->material_ratio,
            'department' => $this->department,
            'generic_name' => $this->generic_name,
            'country_of_Orgin' => $this->country_of_Orgin,
            'age_of_use' => $this->age_of_use,
            'skillset' => $this->skillset,
            'ideal_for' => $this->ideal_for,
            'occasion' => $this->occasion,
            'primary_product_type_color' => $this->primary_product_type_color,
            'secondary_product_type_color' => $this->secondary_product_type_color,
            'pattern' => $this->pattern,
            'product_type' => $this->product_type,
            'machine_washable' => $this->machine_washable,
            'thread_count' => $this->thread_count,
            'maximum_wattage' => $this->maximum_wattage,
            'Adjustable' => $this->Adjustable,
            'project_shape' => $this->project_shape,
            'body_material' => $this->body_material,
            'product_inner_material' => $this->product_inner_material,
            'handle_with_care' => $this->handle_with_care,
            'mechanism' => $this->mechanism,
            'GSM' => $this->GSM,
            'leak_resistance' => $this->leak_resistance,
            'connector' => $this->connector,
            'connectivity_technology' => $this->connectivity_technology,
            'compatible_devices' => $this->compatible_devices,
            'hardware_platform' => $this->hardware_platform,
            'display_technologies' => $this->display_technologies,
            'resolution' => $this->resolution,
            'refresh_rate' => $this->refresh_rate,
            'battery_type' => $this->battery_type,
            'rechargeable' => $this->rechargeable,
            'no_of_battery' => $this->no_of_battery,
            'warrently_summary' => $this->warrently_summary,
            'warrently_year' => $this->warrently_year,
            'discount' => $this->discount,
            'product_instock' => $this->product_instock,
            'product_quantity' => $this->product_quantity,
            'product_price' => $this->product_price,
        ]);

        $query->andFilterWhere(['like', 'template_name', $this->template_name])
            ->andFilterWhere(['like', 'special_feature', $this->special_feature]);

        return $dataProvider;
    }
}
