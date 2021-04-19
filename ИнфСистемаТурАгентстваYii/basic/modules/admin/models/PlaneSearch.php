<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Plane;

/**
 * PlaneSearch represents the model behind the search form of `app\modules\admin\models\Plane`.
 */
class PlaneSearch extends Plane
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPlane', 'idAirport', 'idCargo', 'NumberOfSeat', 'WolumeWeight', 'Service', 'Type'], 'integer'],
            [['Title'], 'safe'],
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
        $query = Plane::find();

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
            'idPlane' => $this->idPlane,
            'idAirport' => $this->idAirport,
            'idCargo' => $this->idCargo,
            'NumberOfSeat' => $this->NumberOfSeat,
            'WolumeWeight' => $this->WolumeWeight,
            'Service' => $this->Service,
            'Type' => $this->Type,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title]);

        return $dataProvider;
    }
}
