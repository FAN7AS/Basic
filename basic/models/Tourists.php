<?php
namespace app\models;
use yii\db\ActiveRecord;
class Tourists extends ActiveRecord
{
		public static function tableName(){
		return('tourists');
	}
 	public function getHotel(){
		return $this->hasOne(Hotel::className(),['idHOT'=>'idHOT']);
	}
		public function getFlight(){
		return $this->hasOne(Flight::className(),['idFLIG'=>'idFLIG']);
	}
	public function getTour(){
		return $this->hasOne(Tour::className(),['idTOUR'=>'idTOU']);
	}
		public function getStock(){
		return $this->hasOne(Stock::className(),['idCA'=>'idCARG']);
	}
public $CTO;
public $CT;
public $CA;
}

	
?>