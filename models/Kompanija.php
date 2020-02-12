<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kompanija".
 *
 * @property int $id
 * @property string|null $naziv
 * @property string|null $email
 * @property int|null $kontakt
 *
 * @property User[] $users
 */
class Kompanija extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kompanija';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kontakt'], 'integer'],
            [['naziv', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naziv' => 'Naziv',
            'email' => 'Email',
            'kontakt' => 'Kontakt',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['kompanija_id' => 'id']);
    }

    public function getAll()
    {
        return Kompanija::find()->all();
    }
}
