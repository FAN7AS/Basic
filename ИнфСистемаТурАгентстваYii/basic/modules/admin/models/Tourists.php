<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tourists".
 *
 * @property int $idTO
 * @property int|null $idCARG
 * @property int|null $idTOU
 * @property int|null $idHOT
 * @property int|null $idFLIG
 * @property string|null $Name
 * @property string|null $LastName
 * @property string|null $PD
 * @property string|null $Sex
 * @property int|null $Age
 * @property int|null $Children
 *
 * @property Flight $idFLIG0
 * @property Hotel $idHOT0
 * @property Stock $idCARG0
 * @property Tour $idTOU0
 */
class Tourists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tourists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCARG', 'idTOU', 'idHOT', 'idFLIG', 'Age', 'Children'], 'integer'],
            [['Name', 'LastName', 'PD', 'Sex'], 'string', 'max' => 45],
            [['idFLIG'], 'exist', 'skipOnError' => true, 'targetClass' => Flight::className(), 'targetAttribute' => ['idFLIG' => 'idFLIG']],
            [['idHOT'], 'exist', 'skipOnError' => true, 'targetClass' => Hotel::className(), 'targetAttribute' => ['idHOT' => 'idHOT']],
            [['idCARG'], 'exist', 'skipOnError' => true, 'targetClass' => Stock::className(), 'targetAttribute' => ['idCARG' => 'idCA']],
            [['idTOU'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['idTOU' => 'idTOUR']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTO' => 'ID Туриста',
            'idCARG' => 'Груз',
            'idTOU' => 'Экскурсия',
            'idHOT' => 'Отель',
            'idFLIG' => 'Рейс',
            'Name' => 'Имя',
            'LastName' => 'Фамилия',
            'PD' => 'Паспортные данные',
            'Sex' => 'Пол',
            'Age' => 'Возраст',
            'Children' => 'Дети',
        ];
    }

    /**
     * Gets query for [[IdFLIG0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFLIG0()
    {
        return $this->hasOne(Flight::className(), ['idFLIG' => 'idFLIG']);
    }

    /**
     * Gets query for [[IdHOT0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdHOT0()
    {
        return $this->hasOne(Hotel::className(), ['idHOT' => 'idHOT']);
    }

    /**
     * Gets query for [[IdCARG0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCARG0()
    {
        return $this->hasOne(Stock::className(), ['idCA' => 'idCARG']);
    }

    /**
     * Gets query for [[IdTOU0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdTOU0()
    {
        return $this->hasOne(Tour::className(), ['idTOUR' => 'idTOU']);
    }
}
