<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stock */

$this->title = 'Обновить запись: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Склад', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idCA]];
$this->params['breadcrumbs'][] = 'обновление';
?>
<div class="stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
