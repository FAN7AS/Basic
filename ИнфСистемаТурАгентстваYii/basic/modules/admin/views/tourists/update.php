<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tourists */

$this->title = 'Обновление записи: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Туристы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->idTO]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="tourists-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
