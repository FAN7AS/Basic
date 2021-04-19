<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "airport".
 *
 * @property int $idAir
 * @property string|null $Title
 *
 * @property Plane[] $planes
 */
class Airport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAir' => 'ID Аэропорта',
            'Title' => 'Название',
        ];
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Plane::className(), ['idAirport' => 'idAir']);
    }
}
