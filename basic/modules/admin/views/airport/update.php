<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Airport */

$this->title = 'Обновить запись: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Аэропорты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idAir]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="airport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
