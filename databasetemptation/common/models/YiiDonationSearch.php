<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\YiiDonation;

/**
 * YiiDonationSearch represents the model behind the search form of `common\models\YiiDonation`.
 */
class YiiDonationSearch extends YiiDonation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['moneyid', '金额'], 'integer'],
            [['捐款人姓名', '单位', '用途'], 'safe'],
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
        $query = YiiDonation::find();

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
            'moneyid' => $this->moneyid,
            '金额' => $this->金额,
        ]);

        $query->andFilterWhere(['like', '捐款人姓名', $this->捐款人姓名])
            ->andFilterWhere(['like', '单位', $this->单位])
            ->andFilterWhere(['like', '用途', $this->用途]);

        return $dataProvider;
    }
}
