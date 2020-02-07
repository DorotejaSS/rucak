<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlavnoJelo;

/**
 * GlavnoJeloSearch represents the model behind the search form of `app\models\GlavnoJelo`.
 */
class GlavnoJeloSearch extends GlavnoJelo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_glavno_jelo', 'nedelja', 'id_dan'], 'integer'],
            [['ime_jela'], 'safe'],
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
        $query = GlavnoJelo::find();

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
            'id_glavno_jelo' => $this->id_glavno_jelo,
            'nedelja' => $this->nedelja,
            'id_dan' => $this->id_dan,
        ]);

        $query->andFilterWhere(['like', 'ime_jela', $this->ime_jela]);

        return $dataProvider;
    }
}
