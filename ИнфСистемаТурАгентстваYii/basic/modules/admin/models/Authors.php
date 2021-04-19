<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $AuID
 * @property string|null $FIO
 * @property string|null $POL
 * @property string|null $DR
 * @property string|null $DS
 * @property int|null $count
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DR', 'DS'], 'safe'],
            [['count'], 'integer'],
            [['FIO', 'POL'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'AuID' => 'ID',
            'FIO' => 'ФИО',
            'POL' => 'ПОЛ',
            'DR' => 'Дата рождения',
            'DS' => 'Дата смерти',
            'count' => 'Count',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['AutID' => 'AuID']);
    }
}
