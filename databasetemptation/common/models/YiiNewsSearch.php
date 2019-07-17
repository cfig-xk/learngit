<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiNews;

/**
 * YiiNewsSearch represents the model behind the search form of `common\models\YiiNews`.
 */
class YiiNewsSearch extends YiiNews
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['newsid'], 'integer'],
            [['标题', '内容', '发布时间'], 'safe'],
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
        $query = YiiNews::find();

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
            'newsid' => $this->newsid,
            '发布时间' => $this->发布时间,
        ]);

        $query->andFilterWhere(['like', '标题', $this->标题])
            ->andFilterWhere(['like', '内容', $this->内容]);

        return $dataProvider;
    }
}
