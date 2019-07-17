<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiPerson;

/**
 * YiiPersonSearch represents the model behind the search form of `common\models\YiiPerson`.
 */
class YiiPersonSearch extends YiiPerson
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personid'], 'integer'],
            [['性别', '姓名', '简介'], 'safe'],
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
        $query = YiiPerson::find();

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
            'personid' => $this->personid,
        ]);

        $query->andFilterWhere(['like', '性别', $this->性别])
            ->andFilterWhere(['like', '姓名', $this->姓名])
            ->andFilterWhere(['like', '简介', $this->简介]);

        return $dataProvider;
    }
}
