<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\genre;
use yii\data\Pagination;

/**
 * genreSearch represents the model behind the search form of `app\modules\admin\models\genre`.
 */
class genreSearch extends genre
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GeID', 'count'], 'integer'],
            [['GenreName', 'Description', 'GenreCreator'], 'safe'],
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
        $query = genre::find();
$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>$pagination,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'GeID' => $this->GeID,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'GenreName', $this->GenreName])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'GenreCreator', $this->GenreCreator]);

        return $dataProvider;
    }
}
