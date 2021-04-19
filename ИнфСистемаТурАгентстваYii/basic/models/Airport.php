<?php
namespace app\models;
use yii\db\ActiveRecord;
class Airport extends ActiveRecord
{
		public function getPlane(){
		return $this->hasMany(Plane::className(),['idAir'=>'idAirport']);
	}
}
 ?>