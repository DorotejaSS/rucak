<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Salata;

/**
 * SalataSearch represents the model behind the search form of `app\models\Salata`.
 */
class SalataSearch extends Salata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_salata'], 'integer'],
            [['ime_salate'], 'safe'],
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
        $query = Salata::find();

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
            'id_salata' => $this->id_salata,
        ]);

        $query->andFilterWhere(['like', 'ime_salate', $this->ime_salate]);

        return $dataProvider;
    }
}
