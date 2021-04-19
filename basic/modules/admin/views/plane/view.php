<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plane */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Самолёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="plane-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->idPlane], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idPlane], [
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
            'idPlane',
            'Title',
              ['attribute' =>'idAirport',
            'value' => function($model)
             {
                return $model->idAirport0->Title;
             }
            ],
               ['attribute' =>'idCargo',
            'value' => function($model)
             {
                return $model->idCargo0->Title;
             }
            ],
            'NumberOfSeat',
            'WolumeWeight',
            'Service',
               [
                'attribute'=>'Type',
                'value'=> function ($data)
                {
                    return $data->Type ? "Грузовой" : "Грузопассажирский";
                },
                'format'=>'html',
            ],
        ],
    ]) ?>

</div>
