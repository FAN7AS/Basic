<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hotel */

$this->title = 'Обновить запись: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Гостиницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idHOT]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="hotel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
