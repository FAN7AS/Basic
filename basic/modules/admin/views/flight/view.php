<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Flight */

$this->title = $model->idFLIG;
$this->params['breadcrumbs'][] = ['label' => 'Рейсы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="flight-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->idFLIG], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idFLIG], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить??',
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
            'idFLIG',
             ['attribute' =>'idPL',
            'value' => function($model)
             {
                return $model->idPL0->Title;
             }
            ],
            'NumberOfFlight',
            'DestinationCountry',
            'DepartureDate',
            'ReturnDate',
            'Price',
        ],
    ]) ?>

</div>
