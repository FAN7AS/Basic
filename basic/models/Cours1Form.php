<?php
namespace app\models;

use yii\base\Model;

class Cours1Form extends Model
{
	//запрос1
	public $category;
	public $values;
	//запрос2
	public $category1;
	public $values1;
	//Запрос3
	public $category2;
	public $values2;
	public $country;
	public $date1;
	public $date2;
	//Запрос4
	public $touristName;
	public $touristLastName;
	//Запрос 5
	public $period1;
	public $period2;
	//Запрос 6
	public $period3;
	public $period4;
	//Запрос 8
	public $PlaneTitle;
	public $period5;
	public $period6;
	//Запрос 9
	public $period7;
	public $period8;
	//Запрос 10
	public $CategoryRaport;
	public $CategoryRaport2;
	public $CategoryRaport3;
	//Запрос 11
	public $period9;
	public $period10;
	//Запрос 14
	public $period11;
	public $period12;
	//Запрос 15

	public $Number;
	public function rules()
	{
		return 
		[
          [['category','category1','category2','values1','values2','values','country','date1','date2','touristName','touristLastName','period1','period2','period3','period4','PlaneTitle','period5','period6','period7','period8','period9','period10','period11','period12','CategoryRaport','CategoryRaport2','CategoryRaport3','Number'],'safe'],
		];
	}
}