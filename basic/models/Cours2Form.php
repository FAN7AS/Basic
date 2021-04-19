<?php
namespace app\models;

use yii\base\Model;

class Cours2Form extends Model
{
	public $category;
	public $values;
	public $category2;
	public $values2;
	public $country;
	public $date1;
	public $date2;
	public function rules()
	{
		return 
		[
          [['category','values'],'required'],
		];
	}
}