<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PorudzbinaS;

/**
 * PorudzbinaSSearch represents the model behind the search form of `app\models\PorudzbinaS`.
 */
class PorudzbinaSSearch extends PorudzbinaS
{
    /**
     * {@inheritdoc}
     */

     public $glavno_jelo;
     public $prilog;
     public $salata;
     public $hleb;
     public $user;

    public function rules()
    {
        return [
            [
                [
                    'id_porudzbina', 'id_glavno_jelo', 'id_prilog', 'id_salata', 'id_hleb', 'id_user'
                ], 
                    'integer'
            ],
            [
                ['glavno_jelo', 'prilog', 'salata', 'hleb'], 'string'
            ],
            [
                ['cena'], 'number'
            ],
            [
                ['created_on'], 'safe'
            ],
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
        $query = PorudzbinaS::find()->joinWith(['glavnoJelo'])
        ->orderBy(['created_on' => SORT_DESC]);

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
            'cena' => $this->cena,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'created_on', $this->created_on])
            ->andFilterWhere(['like', 'glavno_jelo.ime_jela', $this->glavno_jelo])
            ->andFilterWhere(['like', 'prilog.ime_priloga', $this->prilog])
            ->andFilterWhere(['like', 'salata.ime_salate', $this->salata])
            ->andFilterWhere(['like', 'hleb.ime_hleba', $this->hleb]);
        
        // dd($query->createCommand()->getRawSql());

        return $dataProvider;
    }
}
