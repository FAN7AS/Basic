<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Stock;

/**
 * StockSearch represents the model behind the search form of `app\modules\admin\models\Stock`.
 */
class StockSearch extends Stock
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCA', 'Price', 'Weight', 'Rent'], 'integer'],
            [['Title', 'DateOfDelivery'], 'safe'],
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
        $query = Stock::find();

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
            'idCA' => $this->idCA,
            'Price' => $this->Price,
            'Weight' => $this->Weight,
            'DateOfDelivery' => $this->DateOfDelivery,
            'Rent' => $this->Rent,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title]);

        return $dataProvider;
    }
}
