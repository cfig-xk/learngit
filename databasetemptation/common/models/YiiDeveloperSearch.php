<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiDeveloper;

/**
 * YiiDeveloperSearch represents the model behind the search form of `common\models\YiiDeveloper`.
 */
class YiiDeveloperSearch extends YiiDeveloper
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['学号', '专业', '姓名', '性别'], 'safe'],
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
        $query = YiiDeveloper::find();

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
        $query->andFilterWhere(['like', '学号', $this->学号])
            ->andFilterWhere(['like', '专业', $this->专业])
            ->andFilterWhere(['like', '姓名', $this->姓名])
            ->andFilterWhere(['like', '性别', $this->性别]);

        return $dataProvider;
    }
}
