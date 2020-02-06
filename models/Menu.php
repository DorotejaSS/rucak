<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $href
 * @property string|null $icon
 * @property string|null $name
 * @property int|null $order
 * @property string|null $description
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'order'], 'integer'],
            [['description'], 'string'],
            [['href', 'icon', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'href' => 'Href',
            'icon' => 'Icon',
            'name' => 'Name',
            'order' => 'Order',
            'description' => 'Description',
        ];
    }

    public static function getAll()
    {
        $rows = (new \yii\db\Query())
            ->select(['name', 'href'])
            ->from('menu')
            ->all();
        return $rows;
    }

    public static function getSupervisorMenu()
    {
        $menuItems = self::find()
        ->where(['supervisor' => '1'])
        ->all();
        $niz = [];
        foreach ($menuItems as $key => $value) {
            $niz[] = ['label' => $value['name'], 'url' => [$value['href']]];
        }
        return $niz;
    }

    public static function getLoginMenu()
    {
        return array();
    }

    public static function getRegularMenu()
    {   
        $menuItems = self::find()
        ->where(['supervisor' => '0'])
        ->all();
        $niz = [];
        foreach ($menuItems as $key => $value) {
            $niz[] = ['label' => $value['name'], 'url' => [$value['href']]];
        }
        return $niz;
    }

    public static function getMenu()
    {
        $supervisor_identity = Yii::$app->user->identity ?? false;
  
        if ($supervisor_identity === false) {
            return self::getLoginMenu();
        } else if (($supervisor_identity) && $supervisor_identity->id_user === 1) {
            return self::getSupervisorMenu();
        } 
            return self::getRegularMenu();
    }
}
