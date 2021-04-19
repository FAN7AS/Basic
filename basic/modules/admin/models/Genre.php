<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $GeID
 * @property string|null $GenreName
 * @property string|null $Description
 * @property string|null $GenreCreator
 * @property int|null $count
 *
 * @property Books[] $books
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count'], 'integer'],
            [['GenreName', 'GenreCreator'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GeID' => 'ID',
            'GenreName' => 'Жанр',
            'Description' => 'Описание',
            'GenreCreator' => 'Основатель Жанра',
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
        return $this->hasMany(Books::className(), ['GenID' => 'GeID']);
    }
}
