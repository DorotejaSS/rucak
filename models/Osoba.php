<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "osoba".
 *
 * @property int $id_osoba
 * @property string|null $ime
 * @property string|null $prezime
 *
 * @property Porudzbina[] $porudzbinas
 */
class Osoba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'osoba';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime'], 'string', 'max' => 100],
            [['prezime'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_osoba' => 'Id Osoba',
            'ime' => 'Ime',
            'prezime' => 'Prezime',
        ];
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {
        return $this->hasMany(Porudzbina::className(), ['id_osoba' => 'id_osoba']);
    }
}
