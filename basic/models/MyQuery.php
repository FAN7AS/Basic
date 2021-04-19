<?php

namespace app\models;

use yii\base\Model;

class MyQuery extends Model
{
    public $bookName;


    public function rules()
    {
        return [['bookName','trim'],
          ];
             
            
    
}
}