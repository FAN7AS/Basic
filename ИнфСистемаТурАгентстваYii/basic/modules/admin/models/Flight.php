<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "flight".
 *
 * @property int $idFLIG
 * @property int|null $idPL
 * @property int|null $NumberOfFlight
 * @property string|null $DestinationCountry
 * @property string|null $DepartureDate
 * @property string|null $ReturnDate
 * @property int|null $Price
 *
 * @property Plane $idPL0
 * @property Tourists[] $tourists
 */
class Flight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPL', 'NumberOfFlight', 'Price'], 'integer'],
            [['DepartureDate', 'ReturnDate'], 'safe'],
            [['DestinationCountry'], 'string', 'max' => 45],
            [['idPL'], 'exist', 'skipOnError' => true, 'targetClass' => Plane::className(), 'targetAttribute' => ['idPL' => 'idPlane']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFLIG' => 'ID Рейса',
            'idPL' => 'Самолёт',
            'NumberOfFlight' => 'Номер рейса',
            'DestinationCountry' => 'Страна назначения',
            'DepartureDate' => 'Дата вылета',
            'ReturnDate' => 'Дата возвращения',
            'Price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[IdPL0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPL0()
    {
        return $this->hasOne(Plane::className(), ['idPlane' => 'idPL']);
    }

    /**
     * Gets query for [[Tourists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTourists()
    {
        return $this->hasMany(Tourists::className(), ['idFLIG' => 'idFLIG']);
    }
}
