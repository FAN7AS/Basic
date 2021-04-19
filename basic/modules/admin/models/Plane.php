<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "plane".
 *
 * @property int $idPlane
 * @property string|null $Title
 * @property int|null $idAirport
 * @property int|null $idCargo
 * @property int|null $NumberOfSeat
 * @property int|null $WolumeWeight
 * @property int|null $Service
 * @property int|null $Type
 *
 * @property Flight[] $flights
 * @property Airport $idAirport0
 * @property Stock $idCargo0
 */
class Plane extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plane';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAirport', 'idCargo', 'NumberOfSeat', 'WolumeWeight', 'Service', 'Type'], 'integer'],
            [['Title'], 'string', 'max' => 45],
            [['idAirport'], 'exist', 'skipOnError' => true, 'targetClass' => Airport::className(), 'targetAttribute' => ['idAirport' => 'idAir']],
            [['idCargo'], 'exist', 'skipOnError' => true, 'targetClass' => Stock::className(), 'targetAttribute' => ['idCargo' => 'idCA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPlane' => 'ID Самолёта',
            'Title' => 'Название',
            'idAirport' => 'Аэропорт',
            'idCargo' => 'Груз',
            'NumberOfSeat' => 'Количество мест',
            'WolumeWeight' => 'Общий вес',
            'Service' => 'Обслуживание',
            'Type' => 'Тип',
        ];
    }

    /**
     * Gets query for [[Flights]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFlights()
    {
        return $this->hasMany(Flight::className(), ['idPL' => 'idPlane']);
    }

    /**
     * Gets query for [[IdAirport0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAirport0()
    {
        return $this->hasOne(Airport::className(), ['idAir' => 'idAirport']);
    }

    /**
     * Gets query for [[IdCargo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCargo0()
    {
        return $this->hasOne(Stock::className(), ['idCA' => 'idCargo']);
    }
}
