<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prilog".
 *
 * @property int $id_prilog
 * @property string|null $ime_priloga
 *
 * @property Porudzbina[] $porudzbinas
 */
class Prilog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prilog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_priloga'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prilog' => 'Id Prilog',
            'ime_priloga' => 'Ime Priloga',
        ];
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {
        return $this->hasMany(Porudzbina::className(), ['id_prilog' => 'id_prilog']);
    }

    public static function getAll()
    {
        return Prilog::find()->all();
    }
}
