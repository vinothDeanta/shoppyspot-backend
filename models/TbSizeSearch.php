<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbSize;

/**
 * TbSizeSearch represents the model behind the search form of `app\models\TbSize`.
 */
class TbSizeSearch extends TbSize
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size_id'], 'integer'],
            [['size_name', 'size_desc', 'createddate', 'updateddate'], 'safe'],
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
        $query = TbSize::find();

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
            'size_id' => $this->size_id,
            'createddate' => $this->createddate,
            'updateddate' => $this->updateddate,
        ]);

        $query->andFilterWhere(['like', 'size_name', $this->size_name])
            ->andFilterWhere(['like', 'size_desc', $this->size_desc]);

        return $dataProvider;
    }
}
