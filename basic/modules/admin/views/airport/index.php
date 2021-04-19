<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AirportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Аэропорты';
$this->params['breadcrumbs'][] = $this->title;
?>
    <link href="../../../styles1/style1.css" rel="stylesheet" type="text/css" />    

<div class="airport-index">

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

           [ 
            'attribute'=>'idAir',
            'value'=>'idAir',
             'options' => ['width' => '10'],
           ],
             [ 
            'attribute'=>'Title',
            'value'=>'Title',
             'options' => ['width' => '10'],
           ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
