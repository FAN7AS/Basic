<?php

namespace app\models;

use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public $date;
    public $age;
    public $favkitchen;
    public $choice;
    public $textarea;
public $Check;
/**/
   
       public $FIO;
          public $POL;
             public $DR;
                public $DS;
public $ID;
    public function rules()
    {
        return [
            [['name', 'email','date','age','favkitchen','textarea','choice','FIO','POL','DR','DS'], 'required'],
              ['name', 'string', 'length' => [5, 30]],
             
            ['email', 'email'],
            [['date'],'date','format' => 'dd.MM.yyyy','message'=>'Неверный формат даты'],
             [['DR'],'date','format' => 'dd.MM.yyyy','message'=>'Неверный формат даты'],
              [['DS'],'date','format' => 'dd.MM.yyyy','message'=>'Неверный формат даты'],
            ['age','integer','min'=>18,'max'=>100],
            ['ID','trim'],    
            ];
            
    
}
}