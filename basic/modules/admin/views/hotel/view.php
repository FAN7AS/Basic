<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Гостиницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->idHOT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idHOT], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?m?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
                     'options' => [
         'class' => 'table',
 ],
        'attributes' => [
            'idHOT',
            'Title',
            'Price',
            'CheckInDate',
            'DateOfEviction',
            'OccupiedPlaces',
            'Rent',
        ],
    ]) ?>

</div>
