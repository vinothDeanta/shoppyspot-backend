<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbProducts;

/**
 * TbProductsSearch represents the model behind the search form of `app\models\TbProducts`.
 */
class TbProductsSearch extends TbProducts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'color_id', 'size', 'no_of_battery', 'warrently_year'], 'integer'],
            [['product_name', 'category_id', 'sub_category_id',  'product_desc', 'product_image', 'created_at', 'updated_at', 'brand_name', 'model_number', 'model_name', 'product_fit', 'material_ratio', 'department', 'generic_name', 'country_of_Orgin', 'age_of_use', 'skillset', 'ideal_for', 'occasion', 'primary_product_type_color', 'secondary_product_type_color', 'pattern', 'product_type', 'machine_washable', 'thread_count', 'maximum_wattage', 'Adjustable', 'project_shape', 'body_material', 'product_inner_material', 'handle_with_care', 'mechanism', 'GSM', 'leak_resistance', 'connector', 'connectivity_technology', 'compatible_devices', 'hardware_platform', 'display_technologies', 'special_feature', 'resolution', 'refresh_rate', 'battery_type', 'rechargeable', 'warrently_summary'], 'safe'],
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
        $query = TbProducts::find();

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

        $query->joinWith('category');
        $query->joinWith('subCategory');
        // grid filtering conditions
        $query->andFilterWhere([
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'color_id' => $this->color_id,
            'size' => $this->size,
            'no_of_battery' => $this->no_of_battery,
            'warrently_year' => $this->warrently_year,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_desc', $this->product_desc])
            ->andFilterWhere(['like', 'product_image', $this->product_image])
            ->andFilterWhere(['like', 'brand_name', $this->brand_name])
            ->andFilterWhere(['like', 'model_number', $this->model_number])
            ->andFilterWhere(['like', 'model_name', $this->model_name])
            ->andFilterWhere(['like', 'product_fit', $this->product_fit])
            ->andFilterWhere(['like', 'material_ratio', $this->material_ratio])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'generic_name', $this->generic_name])
            ->andFilterWhere(['like', 'country_of_Orgin', $this->country_of_Orgin])
            ->andFilterWhere(['like', 'age_of_use', $this->age_of_use])
            ->andFilterWhere(['like', 'skillset', $this->skillset])
            ->andFilterWhere(['like', 'ideal_for', $this->ideal_for])
            ->andFilterWhere(['like', 'occasion', $this->occasion])
            ->andFilterWhere(['like', 'primary_product_type_color', $this->primary_product_type_color])
            ->andFilterWhere(['like', 'secondary_product_type_color', $this->secondary_product_type_color])
            ->andFilterWhere(['like', 'pattern', $this->pattern])
            ->andFilterWhere(['like', 'product_type', $this->product_type])
            ->andFilterWhere(['like', 'machine_washable', $this->machine_washable])
            ->andFilterWhere(['like', 'thread_count', $this->thread_count])
            ->andFilterWhere(['like', 'maximum_wattage', $this->maximum_wattage])
            ->andFilterWhere(['like', 'Adjustable', $this->Adjustable])
            ->andFilterWhere(['like', 'project_shape', $this->project_shape])
            ->andFilterWhere(['like', 'body_material', $this->body_material])
            ->andFilterWhere(['like', 'product_inner_material', $this->product_inner_material])
            ->andFilterWhere(['like', 'handle_with_care', $this->handle_with_care])
            ->andFilterWhere(['like', 'mechanism', $this->mechanism])
            ->andFilterWhere(['like', 'GSM', $this->GSM])
            ->andFilterWhere(['like', 'leak_resistance', $this->leak_resistance])
            ->andFilterWhere(['like', 'connector', $this->connector])
            ->andFilterWhere(['like', 'connectivity_technology', $this->connectivity_technology])
            ->andFilterWhere(['like', 'compatible_devices', $this->compatible_devices])
            ->andFilterWhere(['like', 'hardware_platform', $this->hardware_platform])
            ->andFilterWhere(['like', 'display_technologies', $this->display_technologies])
            ->andFilterWhere(['like', 'special_feature', $this->special_feature])
            ->andFilterWhere(['like', 'resolution', $this->resolution])
            ->andFilterWhere(['like', 'refresh_rate', $this->refresh_rate])
            ->andFilterWhere(['like', 'battery_type', $this->battery_type])
            ->andFilterWhere(['like', 'rechargeable', $this->rechargeable])
            ->andFilterWhere(['like', 'warrently_summary', $this->warrently_summary])
            ->andFilterWhere(['like', 'tb_category.category_name', $this->category_id])
            ->andFilterWhere(['like', 'tb_sub_category.sub_category_name', $this->sub_category_id]);

        return $dataProvider;
    }
}
