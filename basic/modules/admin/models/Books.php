<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $BuID
 * @property string|null $Names
 * @property string|null $Description
 * @property string|null $Author
 * @property string|null $Genre
 * @property int|null $Year
 * @property int|null $AutID
 * @property int|null $GenID
 *
 * @property Authors $aut
 * @property Genre $gen
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Year', 'AutID', 'GenID'], 'integer'],
            [['Names', 'Author'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 500],
            [['Genre'], 'string', 'max' => 45],
            [['AutID'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['AutID' => 'AuID']],
            [['GenID'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['GenID' => 'GeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BuID' => 'ID',
            'Names' => 'Наименование',
            'Description' => 'Описание',
            'Author' => 'Автор',
            'Genre' => 'Жанр',
            'Year' => 'Год',
            'AutID' => 'Aut ID',
            'GenID' => 'Gen ID',
        ];
    }

    /**
     * Gets query for [[Aut]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAut()
    {
        return $this->hasOne(Authors::className(), ['AuID' => 'AutID']);
    }

    /**
     * Gets query for [[Gen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGen()
    {
        return $this->hasOne(Genre::className(), ['GeID' => 'GenID']);
    }
}
