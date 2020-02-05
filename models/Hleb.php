<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hleb".
 *
 * @property int $id_hleb
 * @property string|null $ime_hleba
 *
 * @property Porudzbina[] $porudzbinas
 */
class Hleb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hleb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ime_hleba'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hleb' => 'Id Hleb',
            'ime_hleba' => 'Ime Hleba',
        ];
    }

    /**
     * Gets query for [[Porudzbinas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorudzbinas()
    {
        return $this->hasMany(Porudzbina::className(), ['id_hleb' => 'id_hleb']);
    }

    public static function getAll()
    {
        return Hleb::find()->all();
    }
}
