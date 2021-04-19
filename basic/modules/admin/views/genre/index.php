<!DOCTYPE html>
<html>
<head>
    <title></title>
                <link href="../../../styles/first.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\genreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Жанры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Жанр', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyCell'=>'-',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GeID',
            'GenreName',
            'Description',
            'GenreCreator',
            'count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<div class="block1"><a href="index.php?r=admin" class="btn btn-primary block" role="button"><h4>Административная часть</h4></a></div>

</div>

</body>
</html>