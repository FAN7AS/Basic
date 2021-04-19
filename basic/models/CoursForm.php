<?php
namespace app\models;

use yii\base\Model;

class CoursForm extends Model
{
	public $category;
	public $value;
	public function rules()
	{
		return 
		[
          [['category','value'],'required'],
		];
	}
}