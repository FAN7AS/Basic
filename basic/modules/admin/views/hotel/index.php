<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\HotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Гостиницы';
$this->params['breadcrumbs'][] = $this->title;
?>
    <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />    

<div class="hotel-index">

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

            'idHOT',
            'Title',
            'Price',
            'CheckInDate',
            'DateOfEviction',
            'OccupiedPlaces',
            'Rent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
