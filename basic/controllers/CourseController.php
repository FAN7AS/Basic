<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\Response;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\MyForm;
use app\models\ContactForm;
use app\models\Cours1Form;
use app\models\Cours2Form;
use app\models\Tourists;
use app\models\Hotel;
use app\models\Tour;
use app\models\Plane;
use app\models\Stock;
use app\models\Flight;
use yii\helpers\ArrayHelper;
use yii\db\Query;
class CourseController extends Controller
{
  public function actionQuerys()
  {
    return $this->render('querys');
  }
  public function actionQuery1()
  {
 
    $modelOb1=new Cours1Form;
    $modelOb2=new Cours2Form;
    if($modelOb1->load(Yii::$app->request->post()))
    {
     $value=$modelOb1->category;
     if ($value == 1) $Query= ArrayHelper::map(tourists::find()->all(),'Name','Name');
     if ($value == 2) $Query= ArrayHelper::map(tourists::find()->all(),'LastName','LastName');
     if ($value == 3) $Query= ArrayHelper::map(tourists::find()->all(),'Age','Age');
   }
   if($modelOb2->load(Yii::$app->request->post()))
   {
     $value1=$modelOb2->category;

     $dataProvider2 = new ActiveDataProvider(['query' =>tourists::find()->where(['Name'=>$value1])->orWhere(['LastName'=>$value1])
      ->orWhere(['Age'=>$value1])->asArray(),  'pagination' =>
      [
        'pageSize' => 5,
      ],
    ]);
   }

   $dataProvider = new ActiveDataProvider(['query' =>tourists::find()->asArray(),  'pagination' => [
    'pageSize' => 5,
  ],]);
   return $this->render('Query1',compact('dataProvider','Query','modelOb1','modelOb2','dataProvider2','values','value1','pagination'));
 }
 public function actionQuery2()
 {
  $modelOb1=new Cours1Form;
  if($modelOb1->load(Yii::$app->request->post()))
  {
   $value=$modelOb1->values1;

   $dataProvider = new ActiveDataProvider(['query' =>tourists::find()->select(['tourists.idHOT','idTO','Title','Name','LastName','Sex','Age'])->joinWith('hotel')->where(['Title'=>$value])->asArray(),  'pagination' => [
    'pageSize' => 3,
  ],]);
 }
 $QueryFind= ArrayHelper::map(hotel::find()->all(),'Title','Title');
 $dataProvider2 = new ActiveDataProvider(['query' =>tourists::find()->select(['tourists.idHOT','idTO','Title','Name','LastName','Sex','Age'])->joinWith('hotel')->groupBy(['Title','Name','PD'])->asArray(),  'pagination' => [
  'pageSize' => 5,
],]);
 return $this->render('Query2',compact('dataProvider2','QueryFind','dataProvider','modelOb1'));

}
public function actionQuery3()
{
  $modelOb1= new Cours1Form;
  $modelOb2= new Cours1Form;
  $modelOb3= new Cours1Form;

  $QueryFind1= ArrayHelper::map(flight::find()->all(),'DestinationCountry','DestinationCountry');

  if ($modelOb1->load(\Yii::$app->request->post()) && \Yii::$app->request->post('button1') == 'button1')
  {
   $valueC=$modelOb1->country;
   $valueD1=$modelOb1->date1;
   $valueD2=$modelOb1->date2;
   $QueryResult=tourists::find()->joinWith('flight')->where(['DestinationCountry'=>$valueC])->andWhere(['>=','DepartureDate',$valueD1])->andWhere(['<=','ReturnDate',$valueD2])->all();
  // $QueryResult=flight::find()->with('tourists')->where(['DestinationCountry'=>$valueC])->all();
   
 }
 if ($modelOb2->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button2') == 'button2')
 {
   $value1=$modelOb2->category2;
   if ($value1 == 1) $Query= ArrayHelper::map(tourists::find()->all(),'Sex','Sex');
   if ($value1 == 2) $Query= ArrayHelper::map(tourists::find()->all(),'Age','Age');

 }
 if ($modelOb3->load(\Yii::$app->request->post()))
 {
   $valueREST=$modelOb3->values2;
   $QueryCAT= tourists::find()->where(['Sex'=>$valueREST])->orWhere(['Age'=>$valueREST])->all();

 }
 return $this->render('Query3',compact('modelOb1','Query','QueryCAT','modelOb2','modelOb3','QueryFind1','QueryResult','valueC','valueREST','value1'));

}
public function actionQuery4()
{
  $modelOb1=new Cours1Form;
  $QueryTouristsName= arrayHelper::map(tourists::find()->all(),'Name','Name');
  $QueryTouristsLastName= arrayHelper::map(tourists::find()->all(),'LastName','LastName');
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $valueName=$modelOb1->touristName;
    $valueLastName=$modelOb1->touristLastName;
    $dataProvider = new ActiveDataProvider(['query' =>tourists::find()
      ->joinWith('flight')
      ->joinWith('hotel')
      ->joinWith('stock')
      ->joinWith('tour')
      ->select(['tourists.idFLIG','tourists.idHOT','idCARG','idTOU','idTO','Name','LastName','PD','DepartureDate','ReturnDate','hotel.Title as HT','stock.Title as ST','Agency',
        'tour.Title as TT'])
      ->where(['Name'=>$valueName])->andWhere(['LastName'=>$valueLastName])->groupBy(['PD','idFLIG'])->asArray(),]);
    $count=tourists::find()

    ->select('*')->where(['Name'=>$valueName])->andWhere(['LastName'=>$valueLastName])->asArray()->all();
  }
  return $this->render('Query4',compact('modelOb1','dataProvider','QueryTouristsName','QueryTouristsLastName','count'));
}
public function actionQuery5()
{
  $modelOb1= new Cours1Form;
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $valuePeriod1=$modelOb1->period1;
    $valuePeriod2=$modelOb1->period2;
    $dataProvider = new ActiveDataProvider(['query' =>tourists::find()->select(['hotel.idHOT','idTO','Title', 'COUNT(*) AS count','OccupiedPlaces'])
      ->joinWith('hotel')->groupBy(['Title'])
      ->where(['>=','CheckInDate',$valuePeriod1])->andWhere(['<=','DateOfEviction',$valuePeriod2])->asArray(),]);


  }
  return $this->render('Query5',compact('modelOb1','dataProvider','','',''));
}
public function actionQuery6()
{
  $modelOb1=new Cours1Form;
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $valuePeriod1=$modelOb1->period3;
    $valuePeriod2=$modelOb1->period4;
    $QueryResult=tourists::find()->joinWith('tour')->where(['>=','TourDate',$valuePeriod1])->andWhere(['<=','TourDate',$valuePeriod2])->andWhere(['not', ['tourists.idTOU' => null]])->all();
  }
  return $this->render('Query6',compact('modelOb1','QueryResult','valuePeriod1','valuePeriod2',''));
}
public function actionQuery7()
{
/*$QueryResult = tour::findBySql('SELECT Title,Agency,PopularityRating  FROM tour WHERE PopularityRating=(select Max(PopularityRating) from tour)')->all(); */
  $subQuery = tour::find()->select(['MAX(PopularityRating)'])->asArray()->all();
  $dataProvider = new ActiveDataProvider(['query' =>tour::find()->select(['idTOUR','Title','Agency','PopularityRating'])
    ->where(['PopularityRating'=>$subQuery['0']])->asArray(),]);
  return $this->render('Query7',compact('dataProvider','subQuery'));
} 
public function actionQuery8()
{
  $modelOb1=new Cours1Form;
  $PlaneTitle= arrayHelper::map(flight::find()->all(),'NumberOfFlight','NumberOfFlight');
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $PlaneTit=$modelOb1->PlaneTitle;
    $period5=$modelOb1->period5;
    $period6=$modelOb1->period6;
    $dataProvider = new ActiveDataProvider(['query' =>Plane::find()->select(['idPlane','NumberOfFlight','Title','NumberOfSeat','WolumeWeight'])
      ->joinWith('flight')
      ->where(['NumberOfFlight'=>$PlaneTit])->andWhere(['>=','DepartureDate',$period5])->andWhere(['<=','ReturnDate',$period6])
      ->groupBy(['Title'])->asArray(),]);

  }
  return $this->render('Query8',compact('dataProvider','modelOb1','PlaneTitle','PlaneTit'));
}
public function actionQuery9()
{
  $modelOb1=new Cours1Form;
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $period7=$modelOb1->period7;
    $period8=$modelOb1->period8;

    $dataProvider = new ActiveDataProvider(['query' =>stock::find()->select(['idCA','stock.Title','Price','Weight','COUNT(idPlane) as C',])
      ->joinWith('plane')
      ->where(['>=','DateOfDelivery',$period7])->andWhere(['<=','DateOfDelivery',$period8])->asArray()->groupBy(['idCA']),]);
    $QueryResult2=plane::find()->select(['COUNT(Type) as CT'])->where(['Type'=>0])->asArray()->all();
    $QueryResult3=plane::find()->select(['COUNT(Type) as CT'])->where(['Type'=>1])->asArray()->all();
  }
  return $this->render('Query9',compact('dataProvider','modelOb1','QueryResult2','QueryResult3'));
}
public function actionQuery10()
{ 
  $modelOb1=new Cours1Form;
  $modelOb2=new Cours1Form;
  $QuerySex= ArrayHelper::map(tourists::find()->all(),'Sex','Sex');
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $CategoryRap=$modelOb1->CategoryRaport;
    if ($CategoryRap == 1) 
    { 
     $CategoryRap='Гостиницы';
     $dataProvider = new ActiveDataProvider(['query' =>hotel::find()
       ->joinWith('tourists')
       ->select(['tourists.idHOT','Title','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Rent*COUNT(idTO) as TotalTot'])->groupBy(['tourists.idHOT'])->asArray(),]); 
   }
   if ($CategoryRap == 2) 
   {
    $CategoryRap='Склад';
    $dataProvider = new ActiveDataProvider(['query' =>stock::find()->joinWith('tourists')->select(['idCA','Title','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Rent*COUNT(idTO) as TotalTot'])->groupBy(['stock.idCA'])->asArray(),]);  

  }
  if ($CategoryRap == 3)
  {
    $CategoryRap='Рейсы'; 
    $dataProvider = new ActiveDataProvider(['query' =>flight::find()->joinWith('tourists')->select(['tourists.idFLIG','NumberOfFlight','Price*COUNT(idTO) as TotalTot'])->groupBy(['flight.idFLIG'])->asArray(),]);  

  }
  if ($CategoryRap == 4) 
  {
    $CategoryRap='Экскурсии';
    $dataProvider = new ActiveDataProvider(['query' =>tour::find()->joinWith('tourists')->select(['idTOUR','Title','Price*COUNT(idTO) as TotalAdd','Tax*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Tax*COUNT(idTO) as TotalTot'])->groupBy(['tour.idTOUR'])->asArray(),]);   

  }
  
}
if ($modelOb2->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button2') == 'button2')
{
 $CategoryRap2=$modelOb2->CategoryRaport2;
 $CategoryRap3=$modelOb2->CategoryRaport3;
 if ($CategoryRap2 == 1) 
 { 

   $CategoryRap='Гостиницы';
   $dataProvider = new ActiveDataProvider(['query' =>hotel::find()
     ->joinWith('tourists')
     ->select(['tourists.idHOT','Title','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Rent*COUNT(idTO) as TotalTot'])->where(['Sex'=>$CategoryRap3])->groupBy(['tourists.idHOT'])->asArray(),]);  
   
 }
 if ($CategoryRap2 == 2) 
 { 
   $CategoryRap='Склад';
   $dataProvider = new ActiveDataProvider(['query' =>stock::find()->joinWith('tourists')->select(['idCA','Title','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Rent*COUNT(idTO) as TotalTot'])->where(['Sex'=>$CategoryRap3])->groupBy(['stock.idCA'])->asArray(),]);   
   
 }
 if ($CategoryRap2 == 3) 
 { 
   $CategoryRap='Рейсы'; 
   $dataProvider = new ActiveDataProvider(['query' =>flight::find()->joinWith('tourists')->select(['tourists.idFLIG','NumberOfFlight','Price*COUNT(idTO) as TotalTot'])->where(['Sex'=>$CategoryRap3])->groupBy(['flight.idFLIG'])->asArray(),]);  
 }
 if ($CategoryRap2 == 4) 
 { 
   $CategoryRap='Экскурсии';
   $dataProvider = new ActiveDataProvider(['query' =>tour::find()->joinWith('tourists')->select(['idTOUR','Title','Price*COUNT(idTO) as TotalAdd','Tax*COUNT(idTO) as TotalExp','Price*COUNT(idTO)-Tax*COUNT(idTO) as TotalTot'])->where(['Sex'=>$CategoryRap3])->groupBy(['tour.idTOUR'])->asArray(),]);   
   
 }

}
return $this->render('Query10',compact('dataProvider','QueryResult2','modelOb1','modelOb2','CategoryRap','CategoryRap2','CategoryRap3','QuerySex'));
}
public function actionQuery11()
{
  $modelOb1= new Cours1Form;
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $period8=$modelOb1->period8;
    $period9=$modelOb1->period9;
    $QueryResult=Plane::find()->all();
    $dataProvider = new ActiveDataProvider(['query' => Plane::find()->asArray(),]);
    
    $dataProvider2 = new ActiveDataProvider(['query' => Hotel::find()->joinWith('tourists')
      ->select(['hotel.idHOT','Title','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalExp'])
      ->where(['>=','CheckInDate',$period8])->andWhere(['<=','DateOfEviction',$period9])->groupBy(['tourists.idHOT'])->asArray(),]);

    $dataProvider3 = new ActiveDataProvider(['query' => Tour::find()->joinWith('tourists')
      ->select(['tour.idTOUR','Title','Price*COUNT(idTO) as TotalAdd','Tax*COUNT(idTO) as TotalExp'])
      ->groupBy(['tour.idTOUR'])->where(['>=','TourDate',$period8])->andWhere(['<=','TourDate',$period9])->asArray(),]);
  }
  return $this->render('Query11',compact('dataProvider','dataProvider2','dataProvider3','modelOb1'));
}
public function actionQuery12()
{
  $dataProvider = new ActiveDataProvider(['query' => tourists::find()->innerJoinWith('stock')
    ->select(['*','COUNT(Title) as C','(100/(SELECT count(Title) as sa FROM tourists inner join stock on stock.idCA=tourists.idCARG))*COUNT(Title) as Share'])->groupBy(['idCA'])->asArray(),
  ]);


  return $this->render('Query12',compact('dataProvider','','',''));
}
public function actionQuery13()
{
  $QueryHotel=hotel::find()
  ->joinWith('tourists')->select(['*','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalDam'])->groupBy(['tourists.idHOT'])->asArray()->all();
  $QueryFlight=flight::find()
  ->joinWith('tourists')->select(['*','Price*COUNT(idTO) as TotalAdd'])->groupBy(['tourists.idFLIG'])->asArray()->all();
  $QueryTour=Tour::find()
  ->joinWith('tourists')->select(['*','Price*COUNT(idTO) as TotalAdd','Tax*COUNT(idTO) as TotalDam'])->groupBy(['idTOU'])->asArray()->all();
  $QueryStock=Stock::find()
  ->joinWith('tourists')->select(['*','Price*COUNT(idTO) as TotalAdd','Rent*COUNT(idTO) as TotalDam'])->groupBy(['idCARG'])->asArray()->all();
  $QueryPlane=Plane::find()
  ->select(['*','SUM(Service) as TotalDam'])->asArray()->all();

  return $this->render('Query13',compact('QueryHotel','QueryFlight','QueryTour','QueryStock','QueryPlane'));
}
public function actionQuery14()
{
  $modelOb1=new Cours1Form;
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $period11=$modelOb1->period11;
    $period12=$modelOb1->period12;
    $dataProvider = new ActiveDataProvider(['query' => tourists::find()->joinWith('flight')
      ->select(['*','COUNT(idTO) AS CTO','(100/COUNT(idTO))*COUNT(idTOU) as CT','(100/COUNT(idTO))*COUNT(idCARG) as CA'])->where(['>=','DepartureDate',$period11])
      ->andWhere(['<=','ReturnDate',$period12])->asArray(),
    ]);
  }
  $dataProvider2 = new ActiveDataProvider([
    'query' => tourists::find()->select(['*','COUNT(idTO) AS CTO','(100/COUNT(idTO))*COUNT(idTOU) as CT','(100/COUNT(idTO))*COUNT(idCARG) as CA'])->asArray(),

  ]);

  return $this->render('Query14',compact('QueryResult','','modelOb1','dataProvider','dataProvider2'));
}
public function actionQuery15()
{
  $modelOb1=new Cours1Form;
  $QueryNumber=ArrayHelper::map(flight::find()->all(),'NumberOfFlight','NumberOfFlight');
  if ($modelOb1->load(\Yii::$app->request->post())&& \Yii::$app->request->post('button1') == 'button1')
  {
    $Num=$modelOb1->Number;
    $dataProvider = new ActiveDataProvider([
      'query' => tourists::find()->joinWith('flight')->joinWith('hotel')->joinWith('stock')->joinWith('tour')->select(['*'])->where(['NumberOfFlight'=>$Num]),
      'pagination' => [
        'pageSize' => 2,
      ],
    ]);
  }
  return $this->render('Query15',compact('QueryResult','QueryNumber','modelOb1','dataProvider',''));
}
}
