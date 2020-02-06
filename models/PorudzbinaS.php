<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "porudzbina".
 *
 * @property int $id_porudzbina
 * @property int|null $id_glavno_jelo
 * @property int|null $id_prilog
 * @property int|null $id_salata
 * @property int|null $id_hleb
 * @property float|null $cena
 * @property string|null $created_on
 * @property int|null $id_user
 *
 * @property Hleb $hleb
 * @property GlavnoJelo $glavnoJelo
 * @property Prilog $prilog
 * @property Salata $salata
 * @property OdrediCenu $cena0
 * @property User $user
 */
class PorudzbinaS extends \yii\db\ActiveRecord
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
            [['id_glavno_jelo', 'id_prilog', 'id_salata', 'id_hleb', 'id_user'], 'integer'],
            [['cena'], 'number'],
            [['created_on'], 'safe'],
            [['id_hleb'], 'exist', 'skipOnError' => true, 'targetClass' => Hleb::className(), 'targetAttribute' => ['id_hleb' => 'id_hleb']],
            [['id_glavno_jelo'], 'exist', 'skipOnError' => true, 'targetClass' => GlavnoJelo::className(), 'targetAttribute' => ['id_glavno_jelo' => 'id_glavno_jelo']],
            [['id_prilog'], 'exist', 'skipOnError' => true, 'targetClass' => Prilog::className(), 'targetAttribute' => ['id_prilog' => 'id_prilog']],
            [['id_salata'], 'exist', 'skipOnError' => true, 'targetClass' => Salata::className(), 'targetAttribute' => ['id_salata' => 'id_salata']],
            [['cena'], 'exist', 'skipOnError' => true, 'targetClass' => OdrediCenu::className(), 'targetAttribute' => ['cena' => 'trenutna_cena']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_porudzbina' => 'Id Porudzbina',
            'id_glavno_jelo' => 'Id Glavno Jelo',
            'id_prilog' => 'Id Prilog',
            'id_salata' => 'Id Salata',
            'id_hleb' => 'Id Hleb',
            'cena' => 'Cena',
            'created_on' => 'Created On',
            'id_user' => 'Id User',
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
        return $this->hasOne(GlavnoJelo::className(), ['id_glavno_jelo' => 'id_glavno_jelo']);
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

    /**
     * Gets query for [[Cena0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCena()
    {
        return $this->hasOne(OdrediCenu::className(), ['trenutna_cena' => 'cena']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    public function getAll()
    {
        // dd(PorudzbinaS::find()->all());
    }
}
