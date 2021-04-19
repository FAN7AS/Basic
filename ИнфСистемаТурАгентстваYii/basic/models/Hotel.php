<?php
namespace app\models;
use yii\db\ActiveRecord;
class Hotel extends ActiveRecord
{
		public static function tableName(){
		return('hotel');
	}
 	public function getTourists(){
		return $this->hasMany(Tourists::className(),['idHOT'=>'idHOT']);
	}
}
?>