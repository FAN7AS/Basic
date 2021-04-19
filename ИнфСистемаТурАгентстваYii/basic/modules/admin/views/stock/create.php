<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Stock */

$this->title = 'Добавить запись';
$this->params['breadcrumbs'][] = ['label' => 'Склад', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
