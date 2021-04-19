<?php
namespace app\models;
use yii\db\ActiveRecord;
class Stock extends ActiveRecord
{
		public static function tableName(){
		return('stock');
	}
 	public function getTourists(){
		return $this->hasMany(Tourists::className(),['idCARG'=>'idCA']);
	}
		public function getPlane(){
		return $this->hasMany(Plane::className(),['idCargo'=>'idCA']);
	}
}
?>