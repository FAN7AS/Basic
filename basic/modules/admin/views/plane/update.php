<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plane */

$this->title = 'Обновить запись: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Самолёты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->idPlane]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="plane-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
