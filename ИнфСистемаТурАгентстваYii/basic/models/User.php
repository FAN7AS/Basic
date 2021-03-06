<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
  
 
public static function tableName(){
return 'users';
}
 
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       
    }


    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
       

        return static::findOne(['username'=> $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
{
return $this->auth_key;
}
    public function generateAuthKey()
    {
        $string='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return $this->auth_key=str_shuffle($string);
    }

    /**
     * {@inheritdoc}
     */
 

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {

        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
return Yii::$app->getSecurity()->validatePassword($password, $this->password);    }
}
