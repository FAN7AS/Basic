<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FlightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Рейсы';
$this->params['breadcrumbs'][] = $this->title;
?>
    <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />    

<div class="flight-index">

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

            'idFLIG',
            //'idPL',
              [
            'attribute' =>'idPL',
            'value' => 'idPL0.Title',
            'filter' =>$arrPlane, 
            ],
            'NumberOfFlight',
            'DestinationCountry',
            'DepartureDate',
            'ReturnDate',
            'Price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
