<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiActivity;

/**
 * YiiActivitySearch represents the model behind the search form of `common\models\YiiActivity`.
 */
class YiiActivitySearch extends YiiActivity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activityid', 'collegeid'], 'integer'],
            [['名称', '地点', '时间', '内容'], 'safe'],
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
        $query = YiiActivity::find();

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
            'activityid' => $this->activityid,
            'collegeid' => $this->collegeid,
            '时间' => $this->时间,
        ]);

        $query->andFilterWhere(['like', '名称', $this->名称])
            ->andFilterWhere(['like', '地点', $this->地点])
            ->andFilterWhere(['like', '内容', $this->内容]);

        return $dataProvider;
    }
}
