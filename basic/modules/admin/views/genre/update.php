<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\genre */

$this->title = 'Update Genre: ' . $model->GeID;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GeID, 'url' => ['view', 'id' => $model->GeID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
