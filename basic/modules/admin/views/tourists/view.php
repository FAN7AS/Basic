<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tourists */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Туристы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tourists-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->idTO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idTO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
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
              'idTO',
            //'idCARG',
            [
            'attribute' =>'idCARG',
            'value' => function($model)
            {
                if(isset($model->idCARG0->Title)) return $model->idCARG0->Title ;
                else return '-';
            } 
            ],
            //'idTOU',
            [
            'attribute' =>'idTOU',
            'value' => function($model)
            {
                 if(isset($model->idTOU0->Title)) return $model->idTOU0->Title ;
                else return '-';
            }
            ],
            //'idHOT',
            [
            'attribute' =>'idHOT',
            'value' => function($model)
             {
                return $model->idHOT0->Title;
             }
            ],
            //'idFLIG',
            [
            'attribute' =>'idFLIG',
             'value' => function($model)
            {
                 return $model->idFLIG0->NumberOfFlight;

            }
            ],
            'Name',
            'LastName',
           'PD',
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
        ],
    ]) ?>

</div>
