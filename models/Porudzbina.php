<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "porudzbina".
 *
 * @property int $id_porudzbina
 * @property int|null $id_osoba
 * @property int|null $id_glavno_jelo
 * @property int|null $id_prilog
 * @property int|null $id_salata
 * @property int|null $id_hleb
 * @property float|null $cena
 * @property string|null $created_on
 *
 * @property Hleb $hleb
 * @property GlavnoJelo $glavnoJelo
 * @property Osoba $osoba
 * @property Prilog $prilog
 * @property Salata $salata
 */
class Porudzbina extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'porudzbina';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_osoba', 'id_glavno_jelo', 'id_prilog', 'id_salata', 'id_hleb'], 'integer'],
            [['cena'], 'number'],
            [['created_on'], 'safe'],
            [['id_hleb'], 'exist', 'skipOnError' => true, 'targetClass' => Hleb::className(), 'targetAttribute' => ['id_hleb' => 'id_hleb']],
            [['id_glavno_jelo'], 'exist', 'skipOnError' => true, 'targetClass' => GlavnoJelo::className(), 'targetAttribute' => ['id_glavno_jelo' => 'id_glavno_jelo']],
            [['id_osoba'], 'exist', 'skipOnError' => true, 'targetClass' => Osoba::className(), 'targetAttribute' => ['id_osoba' => 'id_osoba']],
            [['id_prilog'], 'exist', 'skipOnError' => true, 'targetClass' => Prilog::className(), 'targetAttribute' => ['id_prilog' => 'id_prilog']],
            [['id_salata'], 'exist', 'skipOnError' => true, 'targetClass' => Salata::className(), 'targetAttribute' => ['id_salata' => 'id_salata']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_porudzbina' => 'Id Porudzbina',
            'id_osoba' => 'Id Osoba',
            'id_glavno_jelo' => 'Id Glavno Jelo',
            'id_prilog' => 'Id Prilog',
            'id_salata' => 'Id Salata',
            'id_hleb' => 'Id Hleb',
            'cena' => 'Cena',
            'created_on' => 'Created On',
        ];
    }

    /**
     * Gets query for [[Hleb]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHleb()
    {
        return $this->hasOne(Hleb::className(), ['id_hleb' => 'id_hleb']);
    }

    /**
     * Gets query for [[GlavnoJelo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlavnoJelo()
    {      
        return GlavnoJelo::find()->all();
        // return $this->hasMany(GlavnoJelo::className(), ['id_glavno_jelo' => 'id_glavno_jelo']);
    }

    /**
     * Gets query for [[Osoba]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOsoba()
    {
        return $this->hasOne(Osoba::className(), ['id_osoba' => 'id_osoba']);
    }

    /**
     * Gets query for [[Prilog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrilog()
    {
        return $this->hasOne(Prilog::className(), ['id_prilog' => 'id_prilog']);
    }

    /**
     * Gets query for [[Salata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalata()
    {
        return $this->hasOne(Salata::className(), ['id_salata' => 'id_salata']);
    }
}
