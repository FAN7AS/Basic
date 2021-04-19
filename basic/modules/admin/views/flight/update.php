<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Flight */

$this->title = 'Обновить запись: ' . $model->idFLIG;
$this->params['breadcrumbs'][] = ['label' => 'Рейсы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFLIG, 'url' => ['view', 'id' => $model->idFLIG]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="flight-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
