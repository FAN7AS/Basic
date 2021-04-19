<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PlaneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Самолёты';
$this->params['breadcrumbs'][] = $this->title;
?>
    <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />    

<div class="plane-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
                'options' => [
         'class' => 'table',
 ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPlane',
            'Title',
            //'idAirport',
              [
            'attribute' =>'idAirport',
            'value' => 'idAirport0.Title',
            'filter' =>$arrAir, 
            ],
            //'idCargo',
            [
            'attribute' =>'idCargo',
            'value' => 'idCargo0.Title',
            'filter' =>$arrCar, 
            ],
            [
                'attribute' =>'NumberOfSeat',
            'value'=>'NumberOfSeat',
             'options' => ['width' => '160'],
             ],
            'WolumeWeight',
            'Service',
            //'Type',
             [
                'attribute'=>'Type',
                'value'=> function ($data)
                {
                    return $data->Type ? "Грузовой" : "Грузопассажирский";
                },
                'format'=>'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
