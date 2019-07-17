<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiOrganization;

/**
 * YiiOrganizationSearch represents the model behind the search form of `common\models\YiiOrganization`.
 */
class YiiOrganizationSearch extends YiiOrganization
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['collegeid', '人数'], 'integer'],
            [['校区', '名称'], 'safe'],
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
        $query = YiiOrganization::find();

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
            'collegeid' => $this->collegeid,
            '人数' => $this->人数,
        ]);

        $query->andFilterWhere(['like', '校区', $this->校区])
            ->andFilterWhere(['like', '名称', $this->名称]);

        return $dataProvider;
    }
}
