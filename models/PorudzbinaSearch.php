<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Porudzbina;

/**
 * PorudzbinaSearch represents the model behind the search form of `app\models\Porudzbina`.
 */
class PorudzbinaSearch extends Porudzbina
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_porudzbina', 'id_user', 'id_glavno_jelo', 'id_prilog', 'id_salata', 'id_hleb'], 'integer'],
            [['cena'], 'number'],
            [['created_on'], 'safe'],
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
        $query = Porudzbina::find();

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
            'id_porudzbina' => $this->id_porudzbina,
            'id_user' => $this->id_user,
            'id_glavno_jelo' => $this->id_glavno_jelo,
            'id_prilog' => $this->id_prilog,
            'id_salata' => $this->id_salata,
            'id_hleb' => $this->id_hleb,
            'cena' => $this->cena,
            'created_on' => $this->created_on,
        ]);

        return $dataProvider;
    }
}
