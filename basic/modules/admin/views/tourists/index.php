<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\Pagination;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TouristsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Туристы';
$this->params['breadcrumbs'][] = $this->title;
?>
    <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />    
<div class="tourists-index">

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
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '-'],
     

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idTO',
            //'idCARG',
            [
           
            'attribute' =>'idCARG',
            'value' => 'idCARG0.Title',
        
            ],
            //'idTOU',
            [
            'attribute' =>'idTOU',
            'value' => 'idTOU0.Title',
            'filter' =>$arrTour, 
            ],
            //'idHOT',
            [
            'attribute' =>'idHOT',
            'value' => 'idHOT0.Title',
            'filter' =>$arrHotel, 

            ],
            //'idFLIG',
            [
            'attribute' =>'idFLIG',
            'value' => 'idFLIG0.NumberOfFlight',
            'filter' =>$arrFlight, 
            ],
            'Name',
            'LastName',
            [
            'attribute' =>'PD',
            'value'=>'PD',
             'options' => ['width' => '700'],
            ],
            'Sex',
            'Age',
            //'Children',
            [
                'attribute'=>'Children',
                'value'=> function ($data)
                {
                    return $data->Children ? "Есть" : "Нет";
                },
                'format'=>'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],

        
            
        ],
    ]); ?>


</div>
