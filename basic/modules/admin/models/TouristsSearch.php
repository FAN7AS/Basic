<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Tourists;
use yii\data\Pagination;
/**
 * TouristsSearch represents the model behind the search form of `app\modules\admin\models\Tourists`.
 */
class TouristsSearch extends Tourists
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTO', 'idCARG', 'idTOU', 'idHOT', 'idFLIG', 'Age', 'Children'], 'integer'],
            [['Name', 'LastName', 'PD', 'Sex'], 'safe'],
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
        $query = Tourists::find();
  $pagination = new Pagination([
            'defaultPageSize' => 5,
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
            'idTO' => $this->idTO,
            'idCARG' => $this->idCARG,
            'idTOU' => $this->idTOU,
            'idHOT' => $this->idHOT,
            'idFLIG' => $this->idFLIG,
            'Age' => $this->Age,
            'Children' => $this->Children,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'LastName', $this->LastName])
            ->andFilterWhere(['like', 'PD', $this->PD])
            ->andFilterWhere(['like', 'Sex', $this->Sex]);

        return $dataProvider;
    }
}
