<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiHistory;

/**
 * YiiHistorySearch represents the model behind the search form of `common\models\YiiHistory`.
 */
class YiiHistorySearch extends YiiHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['historyid'], 'integer'],
            [['概要', '时间', '内容'], 'safe'],
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
        $query = YiiHistory::find();

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
            'historyid' => $this->historyid,
            '时间' => $this->时间,
        ]);

        $query->andFilterWhere(['like', '概要', $this->概要])
            ->andFilterWhere(['like', '内容', $this->内容]);

        return $dataProvider;
    }
}
