<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tour */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Экскурсии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tour-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->idTOUR], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->idTOUR], [
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
            'idTOUR',
            'Agency',
            'Title',
            'TourDate',
            'Price',
            'Tax',
            'PopularityRating',
        ],
    ]) ?>

</div>
