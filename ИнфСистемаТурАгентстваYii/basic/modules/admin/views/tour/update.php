<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tour */

$this->title = 'Обновить Экскурсии: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Экскурсии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idTOUR]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
