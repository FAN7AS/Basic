<?php
namespace app\models;
use yii\db\ActiveRecord;
class Flight extends ActiveRecord
{
		public static function tableName(){
		return('flight');
	}
        public function getPlane()
 	    {
		return $this->hasOne(Plane::className(),['idPL'=>'idPlane']);
	    }
		public function getTourists()
		{
		return $this->hasMany(Tourists::className(),['idFLIG'=>'idFLIG']);
	    }
	
}
?>