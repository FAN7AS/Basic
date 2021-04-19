<?php
namespace app\models;
use yii\db\ActiveRecord;
class Books extends ActiveRecord
{

	public function getAuthors(){
		return $this->hasOne(Authors::className(),['AuID'=>'AutID']);
	}
	public function getGenre(){
		return $this->hasOne(Genre::className(),['GeID'=>'GenID']);
	}

}
 ?>