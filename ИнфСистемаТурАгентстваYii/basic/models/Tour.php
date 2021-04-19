<?php
namespace app\models;
use yii\db\ActiveRecord;
class Tour extends ActiveRecord
{
		public static function tableName(){
		return('tour');
	}
 	public function getTourists(){
		return $this->hasMany(Tourists::className(),['idTOU'=>'idTOUR']);
	}
}
?>