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
    public $rec;
    public $textarea;

    public function rules()
    {
        return [
            [['name', 'email','date','age','favkitchen','rec','texarea'], 'required'],
              ['name', 'string', 'length' => [5, 30]],
            ['email', 'email'],
            ['date','date'],
            ['age','compare','compareValue' => 30,'type' => 'number'],
             ['textarea', 'filter', 'filter' => 'trim', 'skipOnArray' => true],
            ;
    }
}
