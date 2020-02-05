<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "odredi_cenu".
 *
 * @property int $id_cena
 * @property float|null $trenutna_cena
 */
class OdrediCenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'odredi_cenu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['trenutna_cena'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cena' => 'Id Cena',
            'trenutna_cena' => 'Trenutna Cena',
        ];
    }

    public static function getAll()
    {
        return OdrediCenu::find()->one();
    }
}
