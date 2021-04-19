<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\filters\ActiveRecord;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\MyForm;
use app\models\ContactForm;
use app\models\Authors;
use app\models\Genre;
use app\models\Books;
use app\models\MyQuery;
class MyController extends Controller{
	public function actionInfo()
	{
		return $this->render('info');
	} 

		public function actionLab3()
	{
		return $this->render('lab3');
	} 
	    public function actionLab1()
    {
    	  $model = new MyForm();
      
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      

        } 
            		return $this->render('lab1',compact('model'));

    }
    public function actionLab2()
    {
    	return $this->render('lab2');
    }
        public function actionAuthors()
    {
                $Authors= authors::find()->all();
        return $this->render('authors',['Authors'=>$Authors]);
    } 
            public function actionGenre()
    {
                $Genre= genre::find()->all();
        return $this->render('genre',['Genre'=>$Genre]);
    } 
            public function actionBooks()
    {
                $query= books::find();
                $Books=$query->with('genre')->with('authors')->all();
        return $this->render('Books',compact('Books'));
    } 
        public function actionQuiries()
    {
        return $this->render('quiries');
    } 
    public function actionQuery1 ()
    {

        $Books=Books::find()->where(['>','Year',1900])->andwhere(['<','Year',2001])->orderBy(['Year'=>SORT_ASC])->all();
        return $this->render('query1',compact('Books'));
    
    }
      
    public function actionQuery2(){
        $Authors=Authors::find()->all();
        return $this->render('query2',compact('Authors'));
    }
        public function actionQuery3(){
        $model= new MyQuery();
        if($model->load(Yii::$app->request->post())){
        $string=$model->bookName;
       $Books=Books::find()->where(['like','Names',$string])->orderBy(['Names'=>SORT_DESC])->all();
    

    }
    
            return $this->render('query3',compact('Books','string','model'));
}
         public function actionAddauthor()
{
         $addform= new Authors();
          $model = new MyForm();
      $Authors= authors::find()->all();

        return $this->render('addauthor',compact('model','addform','Authors'));

 } 
 public function actionDeleteauthor ()
 {
             $addform= new Authors();

              $model = new MyForm();
      $Authors= authors::find()->all();
               /* if($model->load(Yii::$app->request->post())){
                 $id=$model->ID;
                    authors::deleteAll(['=','AuID',$id]);
                return $this->refresh();
                }*/

        return $this->render('deleteauthor',compact('model','addform','Authors'));

 }

}