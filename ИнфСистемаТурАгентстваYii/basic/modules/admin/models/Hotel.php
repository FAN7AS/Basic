<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $idHOT
 * @property string|null $Title
 * @property int|null $Price
 * @property string|null $CheckInDate
 * @property string|null $DateOfEviction
 * @property int|null $OccupiedPlaces
 * @property int|null $Rent
 *
 * @property Tourists[] $tourists
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Price', 'OccupiedPlaces', 'Rent'], 'integer'],
            [['CheckInDate', 'DateOfEviction'], 'safe'],
            [['Title'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idHOT' => 'ID Гостиницы',
            'Title' => 'Название',
            'Price' => 'Цена',
            'CheckInDate' => 'Дата заселения',
            'DateOfEviction' => 'Дата выселения',
            'OccupiedPlaces' => 'Занятые места',
            'Rent' => 'Рента',
        ];
    }

    /**
     * Gets query for [[Tourists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTourists()
    {
        return $this->hasMany(Tourists::className(), ['idHOT' => 'idHOT']);
    }
}
