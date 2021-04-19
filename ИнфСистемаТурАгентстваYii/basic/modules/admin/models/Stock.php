<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $idCA
 * @property string|null $Title
 * @property int|null $Price
 * @property int|null $Weight
 * @property string|null $DateOfDelivery
 * @property int|null $Rent
 *
 * @property Plane[] $planes
 * @property Tourists[] $tourists
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Price', 'Weight', 'Rent'], 'integer'],
            [['DateOfDelivery'], 'safe'],
            [['Title'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCA' => 'ID Груза',
            'Title' => 'Название',
            'Price' => 'Цена',
            'Weight' => 'Вес',
            'DateOfDelivery' => 'Дата доставки',
            'Rent' => 'Рента',
        ];
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Plane::className(), ['idCargo' => 'idCA']);
    }

    /**
     * Gets query for [[Tourists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTourists()
    {
        return $this->hasMany(Tourists::className(), ['idCARG' => 'idCA']);
    }
}
