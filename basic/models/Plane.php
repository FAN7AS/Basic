<?php
namespace app\models;
use yii\db\ActiveRecord;
class Plane extends ActiveRecord
{
		public static function tableName()
		{
		return('plane');
	    }
 	    public function getFlight()
 	    {
		return $this->hasMany(Flight::className(),['idPL'=>'idPlane']);
	    }
	 	public function getStock()
	 	{
		return $this->hasOne(Stock::className(),['idCA'=>'idCargo']);
	    }
}
?>