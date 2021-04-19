<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\authors;
use yii\data\Pagination;

/**
 * authorsSearch represents the model behind the search form of `app\modules\admin\models\authors`.
 */
class authorsSearch extends authors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AuID', 'count'], 'integer'],
            [['FIO', 'POL', 'DR', 'DS'], 'safe'],
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
        $query = authors::find();
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
            'AuID' => $this->AuID,
            'DR' => $this->DR,
            'DS' => $this->DS,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'FIO', $this->FIO])
            ->andFilterWhere(['like', 'POL', $this->POL]);

        return $dataProvider;
    }
}
