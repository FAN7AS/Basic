<?php
namespace app\models;
use yii\db\ActiveRecord;
class Authors extends ActiveRecord
{
		public function getBooks(){
		return $this->hasMany(Books::className(),['AutID'=>'AuID']);
	}
}
 ?>