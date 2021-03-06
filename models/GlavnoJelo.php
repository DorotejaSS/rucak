<?php

namespace app\models;

use Yii;
use app\models\Dan;

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
            [['id_dan'], 'exist', 'skipOnError' => true, 'targetClass' => Dan::className(), 'targetAttribute' => ['dan' => 'id_dan']],
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
    public function getDan()
    {
        return $this->hasMany(Dan::className(), ['id_dan' => 'id_dan']);
    }

    public function getIdDana()
    {
        if (!empty($this->dan)) {
           return $this->dan[0]->dan;
        }

        return 'empty';
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {
        return $this->hasOne(Porudzbina::className(), ['id_glavno_jelo' => 'id_glavno_jelo']);
    }

    public static function getAll()
    {
        $date = date('Y-m-d');
        $firstOfMonth = date("Y-m-01", strtotime($date));
        $week = (int)date("W", strtotime($date)) - intval(date("W", strtotime($firstOfMonth)));
        
        $week_day = (int)date('N') + 1;
        if ($week_day === 6 || $week_day === 7 || $week_day === 8) {
            $week_day = 1;
        }
        
        return GlavnoJelo::find()
        ->where([
            'nedelja' => $week,
            'id_dan' => $week_day,
        ])
        ->orWhere([
            'nedelja' => 0
        ])
        ->all();
    }
}
