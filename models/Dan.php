<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dan".
 *
 * @property int $id_dan
 * @property string|null $dan
 *
 * @property GlavnoJelo[] $glavnoJelos
 */
class Dan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dan' => 'Id Dan',
            'dan' => 'Dan',
        ];
    }

    /**
     * Gets query for [[GlavnoJelos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlavnoJelos()
    {
        return $this->hasMany(GlavnoJelo::class(), ['dan' => 'id_dan']);
    }
}
