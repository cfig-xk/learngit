<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiWorker;

/**
 * YiiWorkerSearch represents the model behind the search form of `common\models\YiiWorker`.
 */
class YiiWorkerSearch extends YiiWorker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workerid', 'collegeid'], 'integer'],
            [['姓名', '电话', '地址', '邮箱', '身份'], 'safe'],
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
        $query = YiiWorker::find();

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
            'workerid' => $this->workerid,
            'collegeid' => $this->collegeid,
        ]);

        $query->andFilterWhere(['like', '姓名', $this->姓名])
            ->andFilterWhere(['like', '电话', $this->电话])
            ->andFilterWhere(['like', '地址', $this->地址])
            ->andFilterWhere(['like', '邮箱', $this->邮箱])
            ->andFilterWhere(['like', '身份', $this->身份]);

        return $dataProvider;
    }
}
