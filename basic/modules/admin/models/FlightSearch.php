<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Flight;
use yii\data\Pagination;
/**
 * FlightSearch represents the model behind the search form of `app\modules\admin\models\Flight`.
 */
class FlightSearch extends Flight
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idFLIG', 'idPL', 'NumberOfFlight', 'Price'], 'integer'],
            [['DestinationCountry', 'DepartureDate', 'ReturnDate'], 'safe'],
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
        $query = Flight::find();
 $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
             'pagination' => $pagination,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idFLIG' => $this->idFLIG,
            'idPL' => $this->idPL,
            'NumberOfFlight' => $this->NumberOfFlight,
            'DepartureDate' => $this->DepartureDate,
            'ReturnDate' => $this->ReturnDate,
            'Price' => $this->Price,
        ]);

        $query->andFilterWhere(['like', 'DestinationCountry', $this->DestinationCountry]);

        return $dataProvider;
    }
}
