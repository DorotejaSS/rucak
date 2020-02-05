<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salata".
 *
 * @property int $id_salata
 * @property string|null $ime_salate
 *
 * @property Porudzbina[] $porudzbinas
 */
class Salata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_salate'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_salata' => 'Id Salata',
            'ime_salate' => 'Ime Salate',
        ];
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {
        return $this->hasMany(Porudzbina::class(), ['id_salata' => 'id_salata']);
    }

    public static function getAll()
    {
        return Salata::find()->all();
    }
}
