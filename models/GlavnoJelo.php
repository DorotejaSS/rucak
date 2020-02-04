<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "glavno_jelo".
 *
 * @property int $id_glavno_jelo
 * @property string|null $ime_jela
 * @property int|null $nedelja
 * @property int|null $dan
 *
 * @property Dan $dan0
 * @property Porudzbina[] $porudzbinas
 */
class GlavnoJelo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'glavno_jelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nedelja', 'dan'], 'integer'],
            [['ime_jela'], 'string', 'max' => 45],
            [['dan'], 'exist', 'skipOnError' => true, 'targetClass' => Dan::className(), 'targetAttribute' => ['dan' => 'id_dan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_glavno_jelo' => 'Id Glavno Jelo',
            'ime_jela' => 'Ime Jela',
            'nedelja' => 'Nedelja',
            'dan' => 'Dan',
        ];
    }

    /**
     * Gets query for [[Dan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDan0()
    {
        return $this->hasOne(Dan::className(), ['id_dan' => 'dan']);
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {   
        return $this->hasMany(Porudzbina::className(), ['id_glavno_jelo' => 'id_glavno_jelo']);
    }

    public function getGlavnoJelo()
    {
      return GlavnoJelo::find()->all(); 
    }
}
