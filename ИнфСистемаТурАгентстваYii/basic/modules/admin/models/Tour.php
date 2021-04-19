<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property int $idTOUR
 * @property string|null $Agency
 * @property string|null $Title
 * @property string|null $TourDate
 * @property int|null $Price
 * @property int|null $Tax
 * @property int|null $PopularityRating
 *
 * @property Tourists[] $tourists
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TourDate'], 'safe'],
            [['Price', 'Tax', 'PopularityRating'], 'integer'],
            [['Agency', 'Title'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTOUR' => 'ID Экскурсии',
            'Agency' => 'Агенство',
            'Title' => 'Название',
            'TourDate' => 'Дата экскурсии',
            'Price' => 'Цена',
            'Tax' => 'Налог',
            'PopularityRating' => 'Рейтинг популярности',
        ];
    }

    /**
     * Gets query for [[Tourists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTourists()
    {
        return $this->hasMany(Tourists::className(), ['idTOU' => 'idTOUR']);
    }
}
