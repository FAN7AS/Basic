<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\books */

$this->title = 'Update Books: ' . $model->BuID;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BuID, 'url' => ['view', 'id' => $model->BuID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
